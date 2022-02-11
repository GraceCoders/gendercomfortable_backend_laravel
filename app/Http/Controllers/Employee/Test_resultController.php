<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Test_resultController extends Controller
{
    public function Test_result(){
        return view('Employee.test_result');
    }
}
