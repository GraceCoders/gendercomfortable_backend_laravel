<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use App\Models\PurchaseCourse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class PaymentsuccessController extends Controller
{
    public function Paymentsuccess($id){
        $ids = Crypt::decrypt($id);
        $update = PurchaseCourse::where('id',$ids)->update(['status'=>2]);
        $data =PurchaseCourse::with('course')->where('id',$ids)->first();

        return view('company.payment_success',compact('data'));
    }
}
