<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Exception;
use DB;

/**
 * Traits
 */

use App\Traits\OutputTrait;

/**
 * Models
 * */

use App\Models\User;
use App\Models\Course;
use App\Models\Lesson;
use App\Models\Question;
use App\Models\Answer;

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
            $this->validateRequest($request->all(), ['name' => 'required', 'description' => 'required', 'price_per_seat' => 'required', 'certificate' => 'required', 'thumbnail' => 'required']);
            $arrayData = $request->all();
            $arrayData['thumbnail'] = $this->uploadFile($arrayData['thumbnail'], config('foldertype.courses'));
            $course->create($arrayData);
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
    public function createLessons(Request $request, Lesson $lesson)
    {
        try {
            $this->validateRequest($request->all(), ['name' => 'required|array', 'media_type' => 'required|array', 'course_id' => 'required']);
            $arrayData = $request->all();
            DB::beginTransaction();
            foreach ($arrayData['name'] as $key => $value) {
                $image = $request->file('media');
                $lesson->create(['course_id' => $arrayData['course_id'], 'name' => $value, 'media_type' => $arrayData['media_type'][$key], 'media' => $this->uploadFile($image[$key], config('foldertype.lessons'))]);
            }
            DB::commit();
            $this->sendSuccessResponse(trans("Messages.CreatedSuccessful"));
        } catch (Exception $ex) {
            $this->sendErrorOutput($ex);
        }
    }

    /**
     * getCourseDetail
     *
     * @param  int $id
     * @param  Course $course
     * @return void
     */
    public function getCourseDetail($id, Course $course)
    {
        try {
            $courseDetail = $course->where('id', $id)->with('lessons')->first();
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
            $this->validateRequest($request->all(), ['question' => 'required|array', 'answers' => 'required|array', 'right_answer' => 'required']);
            $arrayData = $request->all();
            DB::beginTransaction();
            foreach ($arrayData['question'] as $key => $value) {
                $questionId = $question->create(['user_id' => Auth::user()->id, 'question' => $value['question'], 'right_answer' => $value['right_answer']])->id;
            }
            foreach ($arrayData['answers'] as $key => $value) {
                $answer->create(['question_id' => $questionId, 'answer' => $value]);
            }
            DB::commit();
            $this->sendSuccessResponse(trans("Messages.CreatedSuccessful"));
        } catch (Exception $ex) {
            $this->sendErrorOutput($ex);
        }
    }
}