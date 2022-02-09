<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SignupcompanyController extends Controller
{
    public function Signupcompany(){
        return view('company.signup_company');
    }
}
