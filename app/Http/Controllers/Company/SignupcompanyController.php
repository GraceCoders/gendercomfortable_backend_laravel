<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\company;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class SignupcompanyController extends Controller
{
    public function Signupcompany(){
        return view('company.signup_company');
    }
    public function register(Request $request){
        $user= new User();
        $user->username =$request->username;
        $user->email =$request->email;
        $user->company_name=$request->company_name;
        $user->company_bio=$request->company_bio;
        $user->address=$request->address;
        $user->password =Hash::make($request->password);
        $user->user_type = 2;
        if (!empty($request->profilepic)) {
          $file = upload_file($request->profilepic, 'profile');
          $user->profilepic = $file;
      }
        $user->save();
        return redirect('/company/login')->with('success', 'Company Register Successfully!');
      }
}
