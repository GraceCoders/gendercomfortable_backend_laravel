<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CreatetestController extends Controller
{
    public function createtest($id)
    {
        return view('admin.course_tests', compact('id'));
    }
    public function addQuestion(Request $request)
    {
        $id = Auth::id();
        $count = count($request->question);
        $course = Course::where('id',$request->course_id)->update(['status'=>1]);
        for ($i = 0; $i < $count; $i++) {
            $data[] = array(
                'user_id'=>   $id,
                'course_id' => $request->course_id,
                'question' => $request->question[$i],
                'option1' =>$request->option1[$i],
                'option2' =>$request->option2[$i],
                'option3' =>$request->option3[$i],
                'option4' =>$request->option4[$i],
                'right_answer' =>$request->right_answer[$i],
                'status' =>$request->draft

            );
        }
        $course = DB::table('questions')->insert($data);
        return redirect('/admin/publish/course/' .$request->course_id)->with('success', 'Course add successfully');



    }
}
