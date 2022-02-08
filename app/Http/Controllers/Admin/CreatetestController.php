<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CreatetestController extends Controller
{
    public function createtest(){
        return view('admin.create test');
    }
}
