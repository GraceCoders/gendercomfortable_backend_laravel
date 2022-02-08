<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ChangePassController extends Controller
{
    public function changepass(){
        return view('admin.change_password');
    }
}
