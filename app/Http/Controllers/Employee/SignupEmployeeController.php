<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use App\Models\LicenseKey;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SignupEmployeeController extends Controller
{
  public function SignupEmployee()
  {
    return view('Employee.signup_employee');
  }

  public function register(Request $request)
  {
    $use = User::where('email', $request->email)->first();
    if ($use) {
      return redirect('/employee/signup_employee')->with('message', 'Email Already Exist');
    } else {
      $user = new User();
      $user->first_name = $request->first_name;
      $user->email = $request->email;
      $user->last_name = $request->last_name;
      $user->training_voucher = $request->training_voucher;
      $user->password = Hash::make($request->password);
      $user->user_type = 0;
      if (!empty($request->filename)) {
        $file = upload_file($request->filename, 'profile');
        $user->profile_pic = $file;
      }
      $user->save();
      if ($request->license_key) {
        $license = new LicenseKey();
        $license->user_id = $user->id;
        $license->ststus = 1;
        $license->license_key  = $request->license_key;
        $license->save();
      }
      return redirect('/login')->with('success', 'Company Register Successfully!');
    }
  }
}
