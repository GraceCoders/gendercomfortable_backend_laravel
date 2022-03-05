<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\PurchaseCourse;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Company_detailsController extends Controller
{
    public function CompanyDetails($id){
        $data =PurchaseCourse::with('course')->where('user_id',$id)->get();
        $user = User::where('id',$id)->first();
        return view('Employee.company_courses',compact('data','user'));
    }

    
}
