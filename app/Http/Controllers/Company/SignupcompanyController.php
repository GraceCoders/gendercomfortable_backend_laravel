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
        $company = new User();
        $company->username =$request->username;
        $company->email =$request->email;
        $company->company_name=$request->company_name;
        $company->company_bio=$request->company_bio;
        $company->address=$request->address;
        $company->password =Hash::make($request->password);
        $company->user_type = 2;
        if (!empty($request->profilepic)) {
          $file = upload_file($request->profilepic, 'profile');
          $company->profilepic = $file;
      }
        $company->save();
        return redirect('/company/login')->with('success', 'Company Register Successfully!');
      }
}
