<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EditProfileController extends Controller
{
    public function editprofile(){
        $user = Auth::user();
        return view('Employee.editprofile', compact('user'));
    }
}
