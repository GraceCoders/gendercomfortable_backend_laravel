<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\PurchaseCourse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Coursedetails2Controller extends Controller
{
    public function Coursedetail2($id)
    {
        $data = Course::with(['lessons', 'question'])->where('courses.id', $id)->first();
        return view('company.course_details2', compact('data'));
    }
    public function course(Request $request)
    {
        $id = Auth::id();
        $data = new  PurchaseCourse();
        $data->course_id = $request->course_id;
        $data->user_id = $id;
        $data->no_of_seat = $request->no_of_seat;
        $data->status = 1;
        $data->amount = $request->price_per_seat* $request->no_of_seat;
        $data->save();
        if ($data) {
            return redirect('/company/checkout/'.$data->id)->with('success', 'Course CheckOut Successfully');
        } else {
            return redirect('/course/detail/' . $request->course_id)->with('error', 'Some Thing Went wrong');
        }
    }
}