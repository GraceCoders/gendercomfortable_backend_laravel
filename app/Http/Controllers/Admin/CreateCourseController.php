<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Lesson;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CreateCourseController extends Controller
{
    public function createcourse()
    {

        return view('admin.create_course');
    }
    public function addCourse(Request $request)
    {
        $id = Auth::id();
        $course = new Course();
        if (!empty($request->filename)) {
            $file = upload_file($request->filename, 'course');
            $course->thumbnail = $file;
        }else{
            $course->thumbnail = "course/finallogo.svg";
        }
        $course->name = $request->name;
        $course->description = $request->description;
        $course->user_id = $id;
        $course->price_per_seat = $request->price_per_seat;
        $course->certificate  = $request->certificate;
        $course->save();
        return redirect('/admin/course/' .$course->id)->with('success', 'Course add successfully');
    }
    public function addlession(Request $request)
    {
        $id = Auth::id();
        $count = count($request->lession_name);
        for ($i = 0; $i < $count; $i++) {
            if (!empty($request->media[$i])) {
                $file = upload_file($request->media[$i], 'lession');
            }
            $data[] = array(
                'course_id' => $request->course_id,
                'lession_name' => $request->lession_name[$i],
                'media' =>$file,
                'media_type'=>$request->media[$i]->getClientMimeType(),
                'original_name'=>$request->media[$i]->getClientOriginalName(),
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            );
        }
        $course = DB::table('lessons')->insert($data);
        return redirect('/admin/create/test/' .$request->course_id)->with('success', 'Course add successfully');

    }
}
