<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SignupController extends Controller
{
    public function SignupEmployee(){
        return view('Employee.signup_employee');
    }
}
