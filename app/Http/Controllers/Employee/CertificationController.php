<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CertificationController extends Controller
{
    public function Certification(){
        return view('Employee.certification');
    }
}
