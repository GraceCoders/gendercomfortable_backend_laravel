<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Exception;
use Illuminate\Support\Facades\DB;
use App\Traits\OutputTrait;
use App\Models\Course;
use App\Models\Lesson;
use App\Models\Question;
use App\Models\Answer;
use App\Models\PurchaseCourse;
use Illuminate\Support\Facades\DB as FacadesDB;

class CoursesController extends Controller
{
    use OutputTrait;

    /**
     * createCourse
     *
     * @param  Request $request
     * @param  Course $course
     * @return void
     */
    public function createCourse(Request $request, Course $course)
    {
        try {
            $id = Auth::id();
            $course = new Course();
            if (!empty($request->thumbnail)) {
                $file = upload_file($request->thumbnail, 'course');
                $course->thumbnail = $file;
            }
            $course->name = $request->name;
            $course->description = $request->description;
            $course->user_id = $id;
            $course->price_per_seat = $request->price_per_seat;
            $course->certificate  = $request->certificate;
            $course->save();
            $this->sendSuccessResponse(trans("Messages.CreatedSuccessful"));
        } catch (Exception $ex) {
            $this->sendErrorOutput($ex);
        }
    }

    /**
     * createLessons
     *
     * @param  Request $request
     * @param  Lesson $lesson
     * @return void
     */
    public function createLessons(Request $request)
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
                'media' => $file
            );
        }
        $course = FacadesDB::table('lessons')->insert($data);
        if ($course) {
            $this->sendSuccessResponse(trans("Messages.CreatedSuccessful"));
        } else {
            $this->sendSuccessResponse(trans("Messages.failed "));
        }
    }
    /**
     * getCourseDetail
     *
     * @param  int $id
     * @param  Course $course
     * @return void
     */
    public function getCourseDetail(Request $request)
    {
        try {
            $id = $request->course_id;
            $user_id = Auth::id();
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

    /**
     * questions
     *
     * @param  Request $request
     * @param  Question $question
     * @param  Answer $answer
     * @return void
     */
    public function questions(Request $request, Question $question, Answer $answer)
    {
        try {
            $id = Auth::id();
            $count = count($request->question);
            $course = Course::where('id', $request->course_id)->update(['status' => 1]);
            for ($i = 0; $i < $count; $i++) {
                $data[] = array(
                    'user_id' =>   $id,
                    'course_id' => $request->course_id,
                    'question' => $request->question[$i],
                    'option1' => $request->option1[$i],
                    'option2' => $request->option2[$i],
                    'option3' => $request->option3[$i],
                    'option4' => $request->option4[$i],
                    'right_answer' => $request->right_answer[$i],
                    'status' => $request->draft

                );
            }
            $course = DB::table('questions')->insert($data);
            $this->sendSuccessResponse(trans("Messages.CreatedSuccessful"));
        } catch (Exception $ex) {
            $this->sendErrorOutput($ex);
        }
    }

    public function getPurchaseCourse(){
     $id = Auth::id();
     $course = PurchaseCourse::with(['course','lession','question'])->where('id',$id)->paginate(10);
     $this->sendSuccessResponse(trans("Messages.Success"), $course->toArray());
    }
}
