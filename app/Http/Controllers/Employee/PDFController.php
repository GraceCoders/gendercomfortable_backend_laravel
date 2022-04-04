<?php

namespace App\Http\Controllers\employee;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Question;
use App\Models\SaveAnswer;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PDFController extends Controller
{
    public function index($id)
    {
        $user = Auth::user();

        $count = Question::where('course_id',$id)->count();

        $final = SaveAnswer::where('user_id',$user->id)->where('course_id',$id)->where('status',2)->count();
        $date = SaveAnswer::where('user_id',$user->id)->where('course_id',$id)->where('status',2)->orderBy('id','desc')->first();
        $percentage = $final /$count *100;
        $Course = Course::where('id',$id)->first();
        $data = [
            'date' => $date->created_at->format('Y/m/d'),
            'course'=>$Course->name,
            'name'=> $user->first_name.' '. $user->last_name,
            'percentage'=>$percentage
        ];
        $pdf = Pdf::loadView('employee.testpdf', $data);
        return $pdf->download('certificate.pdf');
    }
}
