<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PaymentsuccessController extends Controller
{
    public function Paymentsuccess(){
        return view('company.payment_success');
    }
}
