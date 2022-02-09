<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PaymentoptionController extends Controller
{
    public function Paymentoption(){
        return view('company.payment_option');
    }
}
