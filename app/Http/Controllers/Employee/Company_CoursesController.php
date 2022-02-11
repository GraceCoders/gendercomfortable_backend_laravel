<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Company_CoursesController extends Controller
{
    public function Companycourses(){
        return view('Employee.company_courses');
    }
}
