<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EditProfileController extends Controller
{
    public function editprofile(){
        $user = Auth::user();
        return view('Employee.editprofile', compact('user'));
    }
    public function updateProfile(Request $request)
    {
        $email = User::where('email',$request->email)->first();
        $exist = User::where('id', Auth::id())->first();
            $data = $request->all();
            $user = User::where('id', Auth::id())->first();
            $user->first_name = $request->first_name;
            $user->last_name = $request->last_name;
            $user->email = $request->email;
            if ($request->filename) {
                $file = upload_file($request->filename, 'profile');
                $user->profile_pic = $file;
            }
            $user->save();
            return redirect('/employee/edit/profile')->with('success', 'Profile update Successfully');      
    }
}
