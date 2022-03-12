<?php

namespace App\Http\Controllers\Company;

use App\Models\PurchaseCourse;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Srmklive\PayPal\Services\PayPal as PayPalClient;

class PayPalController extends Controller
{
    /**
     * create transaction.
     *
     * @return \Illuminate\Http\Response
     */
    public function createTransaction($ids)
    {
        $id = Crypt::decrypt($ids);
        $data =PurchaseCourse::with('course')->where('id',$id)->first();
        return view('company.checkout',compact('data'));
    }

    /**
     * process transaction.
     *
     * @return \Illuminate\Http\Response
     */
    public function processTransaction(Request $request,$id)
    {
        $ids = Crypt::decrypt($id);
        $data =PurchaseCourse::with('course')->where('id',$ids)->first();
        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $paypalToken = $provider->getAccessToken();

        $response = $provider->createOrder([
            "intent" => "CAPTURE",
            "application_context" => [
                "return_url" => route('successTransaction',$id),
                "cancel_url" => route('cancelTransaction',$id),
            ],
            "purchase_units" => [
                0 => [
                    "amount" => [
                        "currency_code" => "USD",
                        "value" => $data->amount
                    ]
                ]
            ]
        ]);

        if (isset($response['id']) && $response['id'] != null) {

            // redirect to approve href
            foreach ($response['links'] as $links) {
                if ($links['rel'] == 'approve') {
                    return redirect()->away($links['href']);
                }
            }

            return redirect()
                ->route('createTransaction',$id)
                ->with('error', 'Something went wrong.');

        } else {
            return redirect()
                ->route('createTransaction',$id)
                ->with('error', $response['message'] ?? 'Something went wrong.');
        }
    }

    /**
     * success transaction.
     *
     * @return \Illuminate\Http\Response
     */
    public function successTransaction(Request $request,$id)
    {
        $ids = Crypt::decrypt($id);
        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $provider->getAccessToken();
        $response = $provider->capturePaymentOrder($request['token']);
        $save = PurchaseCourse::where('id',$ids)->first();
        $save->status =$response['status'];
        $save->transaction_id =$response['id'];
        $save->purchase_key = random_int(10000000, 99999999);
        $save->save();

        if (isset($response['status']) && $response['status'] == 'COMPLETED') {
            return redirect()
                ->route('payment.success',$id)
                ->with('success', 'Transaction complete.');
        } else {
            return redirect()
                ->route('createTransaction',$id)
                ->with('error', $response['message'] ?? 'Something went wrong.');
        }
    }

    /**
     * cancel transaction.
     *
     * @return \Illuminate\Http\Response
     */
    public function cancelTransaction(Request $request,$id)
    {
        return redirect()
            ->route('createTransaction',$id)
            ->with('error', $response['message'] ?? 'You have canceled the transaction.');
    }
}