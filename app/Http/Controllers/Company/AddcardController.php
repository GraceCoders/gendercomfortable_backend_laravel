<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AddcardController extends Controller
{
    public function Addcard(){
        return view('company.add_card');
    }
}
