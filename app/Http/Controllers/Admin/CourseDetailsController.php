<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseDetailsController extends Controller
{
    public function coursedetail($id){

        $data = Course::with(['lessons','question'])->where('courses.id',$id)->first();
        return view('admin.course_details',compact('data'));
    }
}
