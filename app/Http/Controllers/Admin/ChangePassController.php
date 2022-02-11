<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ChangePassController extends Controller
{
    public function changepass()
    {
        return view('admin.change_password');
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
            return redirect('/admin/change/password')->with('success', 'please check our confirm password');
        } else {
            try {
                if ((Hash::check(request('old_password'), Auth::user()->password)) == false) {
                    return redirect('/admin/change/password')->with('success', 'Check your old password');
                } else if ((Hash::check(request('new_password'), Auth::user()->password)) == true) {
                    return redirect('/admin/change/password')->with('success', 'Please enter a password which is not similar then current password');
                } else {
                    User::where('id', $userid)->update(['password' => Hash::make($input['new_password'])]);
                    $arr = array("status" => 200, "message" => "Password updated successfully.", "data" => array());
                    return redirect('/admin/change/password')->with('success', 'Password updated successfully.');
                }
            } catch (\Exception $ex) {
                return redirect('/admin/change/password')->with('success', 'Some thing went wrong please try again');
            }
        }
    }
}
