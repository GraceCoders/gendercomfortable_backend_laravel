<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;

class CreateCourseController extends Controller
{
    public function createcourse()
    {
        return view('admin.create_course');
    }
    public function register(Request $request)
    {
        $user = new Course();





        return redirect('/admin/create_course')->with('success', 'Course add successfully');
    }
}
