<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use App\Models\PurchaseCourse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PurchascourseController extends Controller
{
    public function PurchaseCourse(){
        $id = Auth::id();
        $data = PurchaseCourse::with(['course','question'])->where('user_id',$id)->paginate(9);
  
        return view('company.purchased_courses',compact('data'));
    }
}
