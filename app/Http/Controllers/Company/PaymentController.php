<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;
use Srmklive\PayPal\Services\ExpressCheckout;

class PaymentController extends Controller
{
    public function handlePayment(Request $request)
    {
        $product = [];
        $product['items'] = [
            [
                'name' => 'Nike Joyride 2',
                'price' => 11,
                'desc'  => 'Running shoes for Men',
                'qty' => 2
            ]
        ];
  
        $product['invoice_id'] = 22;
        $product['invoice_description'] = "Order #{$product['invoice_id']} Bill";
        $product['return_url'] = route('success.payment');
        $product['cancel_url'] = route('cancel.payment');
        $product['total'] = 2;
        $paypalModule = new ExpressCheckout;
        $res = $paypalModule->setExpressCheckout($product);
        $res = $paypalModule->setExpressCheckout($product, true);
        return redirect($res['paypal_link']);
    }
   
    public function paymentCancel()
    {
        dd('Your payment has been declend. The payment cancelation page goes here!');
    }
  
    public function paymentSuccess(Request $request)
    {
        $paypalModule = new ExpressCheckout;
        $response = $paypalModule->getExpressCheckoutDetails($request->token);
        if (in_array(strtoupper($response['ACK']), ['SUCCESS', 'SUCCESSWITHWARNING'])) {
          return redirect('/company/payment/success');
        }
  
        dd('Error occured!');
    }
}
// sb-ztfnq13829928@personal.example.com
// L-(1g.(8
