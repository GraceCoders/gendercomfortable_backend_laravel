<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function Admin(){
        $course = Course::paginate(9);
        return view('admin.home_admin',compact('course'));
    }
}
