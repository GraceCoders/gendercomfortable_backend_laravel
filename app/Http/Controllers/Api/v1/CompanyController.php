<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CompanyController extends Controller
{
    public function getCourseDetail(Request $request)
    {
        try {
            $id = $request->course_id;
            $courseDetail = Course::with(['lessons', 'question'])->where('courses.id', $id)->first();
            $this->sendSuccessResponse(trans("Messages.Success"), $courseDetail->toArray());
        } catch (Exception $ex) {
            $this->sendErrorOutput($ex);
        }
    }
    public function getCourse(Request $request)
    {
        try {
            $id = Auth::id();
            $courseDetail = Course::with(['lessons', 'question'])->paginate(10);
            $this->sendSuccessResponse(trans("Messages.Success"), $courseDetail->toArray());
        } catch (Exception $ex) {
            $this->sendErrorOutput($ex);
        }
    }

}
