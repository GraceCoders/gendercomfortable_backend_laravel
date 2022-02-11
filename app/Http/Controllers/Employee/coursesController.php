<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class coursesController extends Controller
{
    public function Courses(){
        return view('Employee.courses');
    }
}
