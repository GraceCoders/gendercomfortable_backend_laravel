<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SignupController extends Controller
{
    public function signup(){
        return view('admin.signup_admin');
    }
    public function register(Request $request){
      $user = new User();
      $user->name = $request->first_name.' ' . $request->last_name;
      $user->first_name =$request->first_name;
      $user->last_name =$request->last_name;
      $user->email =$request->email;
      $user->password =Hash::make($request->password);
      $user->bio =$request->bio;
      $user->user_type = 1;
      if (!empty($request->profilepic)) {
        $file = upload_file($request->profilepic, 'profile');
        $user->profilepic = $file;
    }
      $user->save();
      return redirect('/admin/login')->with('success', 'Admin Register Successfully!');
    }
}
