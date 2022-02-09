<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PurchascourseController extends Controller
{
    public function PurchaseCourse(){
        return view('company.purchased_courses');
    }
}
