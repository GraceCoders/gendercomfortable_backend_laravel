<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class Company_CoursesController extends Controller
{
    public function Companycourses(){
        return view('Employee.company_courses');
    }
    public function search(){
        $user = User::where('latitude','!=',null)->get();
        return view('Employee.search',compact('user'));
    }
}
