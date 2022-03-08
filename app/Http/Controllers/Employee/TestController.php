<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use App\Models\Question;
use App\Models\SaveAnswer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TestController extends Controller
{
    public function Test($id){
        $user_id = Auth::id();
        $count = Question::where('course_id',$id)->count();
        $question_id = SaveAnswer::where('user_id',$user_id)->where('course_id',$id)->pluck('question_id');
        $data = Question::whereNotIn('id',$question_id)->where('course_id',$id)->first();
        $answercount = SaveAnswer::where('user_id',$user_id)->where('course_id',$id)->count();
        if(!empty($data)){
            return view('Employee.test',compact('data','count','answercount'));
        }else{
            $final = SaveAnswer::where('user_id',$user_id)->where('course_id',$id)->where('status',2)->count();
            $percentage = $count /$final *100;
            return view('Employee.test_result',compact('data','count','answercount'));
        }
        
    }
}
