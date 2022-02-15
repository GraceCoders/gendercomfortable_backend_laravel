<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Models\CompanyCourse;
use App\Models\Course;
use App\Models\User;
use App\Traits\OutputTrait;
use App\Traits\ValidationTrait;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class CompanyController extends Controller
{
    use OutputTrait, ValidationTrait;

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

    public function buyCourse(Request $request)
    {
        try {
            $data = $request->all();
            $validator = Validator::make($data, [
                'course_id'          => 'required',
                'no_of_seat'          => 'required'
            ]);
            if ($validator->fails()) {
                return response()->json(['statusCode' => 422, 'message' => getErrorAsString($validator->errors()), 'data' => null], 422);
            } else {
            $id = Auth::id();
            $data = $request->all();
            $company = new CompanyCourse();
            $company->user_id = $id;
            $company->course_id = $request->course_id;
            $company->status = 1;
            $company->no_of_seat = $request->no_of_seat;
            $company->payment = 1;
            $company->save();
            $this->sendSuccessResponse(trans("Messages.Success"), $company->toArray());
            }
        } catch (Exception $ex) {
            $this->sendErrorOutput($ex);
        }
    }
    public function getBuyCourse(Request $request)
    {
        try {
            $id = Auth::id();
            $user = DB::table('company_course')->where('user_id',$id)->first();
            $data = CompanyCourse::with(['lessons', 'question'])->where('user_id', $id)->paginate(20);
            if($user){
                $this->sendSuccessResponse(trans("Messages.Success"), $data->toArray());
            }else{
                $this->sendSuccessResponse(trans("Messages.data not found"), $data->toArray());
            }
        } catch (Exception $ex) {
            $this->sendErrorOutput($ex);
        }
    }
}
