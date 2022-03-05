<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\PurchaseCourse;
use Illuminate\Http\Request;

class CourseDetailsController extends Controller
{
    public function coursedetail($id){

        $data = Course::with(['lessons','question'])->where('courses.id',$id)->first();
        $purchaseCourse = PurchaseCourse::with('users')->where('id',$id)
        ->where('status','COMPLETED')
        ->get();
        return view('admin.course_details',compact('data','purchaseCourse'));
    }
}
