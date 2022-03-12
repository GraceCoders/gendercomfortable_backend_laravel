<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CompanyProfileController extends Controller
{
    public function companyProfile(){
        $profile = User::where('id',Auth::id())->first();
        return view('company.edit_profile2',compact('profile'));
    }
    public function updateProfile(Request $request)
    {
        $data = $request->all();
        $user = User::where('id', Auth::id())->first();
        $user->username =isset($request->username) && !empty($request->username) ? $request->username : $user->username;
        $user->email =isset($request->email) && !empty($request->email) ? $request->email : $user->email;
        $user->bio =isset($request->company_bio) && !empty($request->company_bio) ? $request->company_bio : $user->company_bio;
        $user->company_name =isset($request->company_name) && !empty($request->company_name) ? $request->company_name : $user->company_name;
        $user->address =isset($request->address) && !empty($request->address) ? $request->address : $user->address;
        $user->latitude =isset($request->lat) && !empty($request->lat) ? $request->lat : $user->lat;
        $user->longitude =isset($request->long) && !empty($request->long) ? $request->long : $user->long;
        if ($request->profilepic) {
            $file = upload_file($request->profilepic, 'profile');
            $user->profilepic = $file;
        }
        $user->save();
        return redirect('/company/profile')->with('success', 'Profile updated Successfully');
    }
}
