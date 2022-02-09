<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CompanyhomeController extends Controller
{
    public function Companyhome(){
        return view('company.company_home');
    }
}
