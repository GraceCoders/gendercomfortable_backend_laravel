<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EditprofileController extends Controller
{
    public function edit(){
        return view('admin.edit profile');
    }
}
