<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\PurchaseCourse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PurchascourseController extends Controller
{
    public function PurchaseCourse(){
        $id = Auth::id();
        $daa = Course::join('purchase_course','purchase_course.course_id','=','courses.id')
        ->select('courses.id')
        ->where('purchase_course.user_id',$id)
        ->groupBy('courses.id')
        ->paginate(9);

        return view('company.purchased_courses',compact('daa'));
    }
}
