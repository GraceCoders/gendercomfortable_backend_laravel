<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PurchageCoursestatController extends Controller
{
    public function Purchasestat(){
        return view('company.purchase_course stat');
    }
}
