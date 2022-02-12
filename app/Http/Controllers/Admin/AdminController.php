<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function Admin(){
        $id = Auth::id();
        $course = Course::where('user_id',$id)->where('status',0)->paginate(9);
        $draft = Course::where('user_id',$id)->where('status',1)->paginate(9);
        return view('admin.home_admin',compact('course','draft'));
    }
}
