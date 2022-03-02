<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use App\Models\Course;

class CompanyhomeController extends Controller
{
    public function Companyhome(){

        $data = Course::where('courses.status',0)->paginate(9);
        return view('company.company_home',compact('data'));
    }
}
