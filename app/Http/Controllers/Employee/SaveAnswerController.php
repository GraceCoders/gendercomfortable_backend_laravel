<?php

namespace App\Http\Controllers\Employee;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Question;
use App\Models\SaveAnswer;
use Illuminate\Support\Facades\Auth;

class SaveAnswerController extends Controller
{
    public function saveAnswer(Request $request)
    {
        $id =  Auth::id();
        $exist = SaveAnswer::where('user_id', $id)->where('question_id', $request->question_id)->first();
        if (empty($exist)) {
            $answer = new SaveAnswer();
            $answer->user_id = $id;
            $answer->course_id = $request->course_id;
            $answer->question_id = $request->question_id;
            $answer->answer = $request->answer;
            $question = Question::where('course_id',$request->course_id)->where('id', $request->question_id)->first();
            $answer12 = $request->answer;
            if ($answer12 == $question->right_answer) {
                $answer->status = 2;
            }
            $answer->save();
            return redirect('/employee/test/'.$request->course_id)->with('success', "Answer Submit successfully");
        } else {
            $exist->user_id = $id;
            $exist->course_id = $request->course_id;
            $exist->question_id = $request->question_id;
            $exist->answer = $request->answer;
            $question = Question::where('course_id',$request->course_id)->where('id', $request->question_id)->first();
            $answer = $request->answer;
            if ($answer == $question->right_answer) {
                $answer->status = 2;
            }
            $exist->save();
            return redirect('/employee/test/'.$request->course_id)->with('success', "Answer Submit successfully");
        }
    }
}
