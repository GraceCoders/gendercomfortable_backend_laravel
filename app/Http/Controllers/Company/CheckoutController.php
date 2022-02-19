<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use App\Models\PurchaseCourse;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function Checkout($id){
        $data =PurchaseCourse::with('course')->where('id',$id)->first();
        return view('company.checkout',compact('data'));
    }
}
