<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\company;
use App\Models\User;
use App\Models\UserCategory;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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
        $user->bio=$request->bio;
        $user->address=$request->address;
        $user->latitude =$request->lat;
        $user->longitude =$request->long;
        $user->password =Hash::make($request->password);
        $user->user_type = 2;
        if (!empty($request->filename)) {
          $file = upload_file($request->filename, 'profile');
          $user->profile_pic = $file;
      }
        $user->save();
        foreach($request->category_id as $value){
            $data = new UserCategory();
            $data->user_id = $user->id;
            $data->category_id = $value;
            $data->status = 1;
            $data->save();
        }
        return redirect('/login')->with('success', 'Company Register Successfully!');
      }

      public function changepass()
      {
          return view('company.change_password');
      }
      public function updatePassword(Request $request)
      {
          $input = $request->all();
          $userid = Auth::id();
          $rules = array(
              'old_password' => 'required',
              'new_password' => 'required',
              'confirm_password' => 'required|same:new_password',
          );
          $validator = Validator::make($input, $rules);
          if ($validator->fails()) {
              return redirect('/company/password')->with('error', 'please check our confirm password');
          } else {
              try {
                  if ((Hash::check(request('old_password'), Auth::user()->password)) == false) {
                      return redirect('/company/password')->with('error', 'Check your old password');
                  } else if ((Hash::check(request('new_password'), Auth::user()->password)) == true) {
                      return redirect('/company/password')->with('error', 'Please enter a password which is not similar then current password');
                  } else {
                      User::where('id', $userid)->update(['password' => Hash::make($input['new_password'])]);
                      $arr = array("status" => 200, "message" => "Password updated successfully.", "data" => array());
                      return redirect('/company/password')->with('success', 'Password updated successfully.');
                  }
              } catch (\Exception $ex) {
                  return redirect('/company/password')->with('error', 'Some thing went wrong please try again');
              }
          }
      }
}
