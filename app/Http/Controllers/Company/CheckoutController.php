<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use App\Models\PurchaseCourse;
use Braintree\Gateway;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class CheckoutController extends Controller
{
    public function Checkout($id){
        $ids=  Crypt::decrypt($id);
        $data =PurchaseCourse::with('course')->where('id',$ids)->first();
        return view('company.checkout',compact('data'));
    }
}
