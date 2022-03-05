<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;

class course_lessionController extends Controller
{
    public function Courselession($id){
       
         $data = Course::with(['lessons','question'])->where('id',$id)->first();
       return view('Employee.course_lession',compact('data'));
    }
}
