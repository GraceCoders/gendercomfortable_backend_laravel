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
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->bio = $request->company_bio;
        $user->company_name = $request->company_bio;
        $user->address = $request->address;
        if ($request->profilepic) {
            $file = upload_file($request->profilepic, 'profile');
            $user->profilepic = $file;
        }
        $user->save();
        return redirect('/company/profile')->with('success', 'Profile update Successfully');
    }
}
