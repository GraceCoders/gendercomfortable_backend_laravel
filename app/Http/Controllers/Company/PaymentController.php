<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\URL;
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Item;
use Srmklive\PayPal\Services\ExpressCheckout;

/** All Paypal Details class **/

use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\PaymentExecution;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Transaction;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Rest\ApiContext;
use Notification;


class PaymentController extends Controller
{
    public function index()
    {
        return view('paywithpaypal');
    }
    public function payWithpaypal(Request $request)
    {
        $course = Course::where('id',$request->course_id)->first();
        $order =[
            'course_name' =>$course->name,
            'amount' =>$request->amount,
            'description'=>"purchase new course"
        ];
        $order['invoice']=uniqid();
        $order['return_url']=route('payment.success');
        $order['cancel_url'] = route('payment.success');

        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $paypalToken = $provider->getAccessToken();

        $response = $provider->createOrder($order);

        if (isset($response['id']) && $response['id'] != null) {

            // redirect to approve href
            foreach ($response['links'] as $links) {
                if ($links['rel'] == 'approve') {
                    return redirect()->away($links['href']);
                }
            }

            return redirect()
                ->route('createTransaction')
                ->with('error', 'Something went wrong.');

        } else {
            return redirect()
                ->route('createTransaction')
                ->with('error', $response['message'] ?? 'Something went wrong.');
        }

    }
  
}
