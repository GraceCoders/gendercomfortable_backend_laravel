<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Company_detailsController extends Controller
{
    public function CompanyDetails(){
        return view('Employee.company_details');
    }
}
