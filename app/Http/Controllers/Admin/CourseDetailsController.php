<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Jobs\ConvertVideoForDownloading;
use App\Jobs\ConvertVideoForStreaming;
use App\Models\Course;
use App\Models\Lesson;
use App\Models\PurchaseCourse;
use App\Models\Question;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;

class CourseDetailsController extends Controller
{
    public function coursedetail($id)
    {

        $data = Course::with(['lessons', 'question'])->where('status', '!=', 2)->where('courses.id', $id)->first();
        $purchaseCourse = PurchaseCourse::with('users')->where('purchase_course.course_id', $id)
            ->where('status', 'COMPLETED')
            ->get();
        return view('admin.course_details', compact('data', 'purchaseCourse'));
    }
    public function edit(Request $request, $id)
    {
        $data = Course::where('id', $id)->first();
        return view('admin.course.course_edit', compact('data'));
    }
    public function update(Request $request, $id)
    {
        $user_id = Auth::id();
        $course = Course::where('id', $id)->first();
        if (!empty($request->filename)) {
            $file = upload_file($request->filename, 'course');
            $course->thumbnail = $file;
        }
        $course->name = $request->name;
        $course->description = $request->description;
        $course->user_id = $user_id;
        $course->price_per_seat = $request->price_per_seat;
        $course->certificate  = $request->certificate;
        $course->save();
        return redirect('admin/course/lesson/edit/' . $course->id)->with('success', 'Course add successfully');
    }
    public function lessonEdit($id)
    {
        $data = Lesson::where('course_id', $id)->get();
        return view('admin.course.lesson_edit', compact('data', 'id'));
    }
    public function lessonUpdate(Request $request)
    {
        $user_id = Auth::id();
        $count = count($request->lession_name);
        for ($i = 0; $i < $count; $i++) {
            if (isset($request->id[$i])) {
                $lesson = Lesson::where('id', $request->id[$i])->first();
                if (!empty($request->media[$i])) {
                    $file = upload_file($request->media[$i], 'lession');
                    $lesson->media = $file;
                    $lesson->media_type = $request->media[$i]->getClientMimeType();
                    $lesson->original_name = $request->media[$i]->getClientOriginalName();

                }
                $lesson->course_id = $request->course_id;
                $lesson->lession_name = $request->lession_name[$i];
                $lesson->save();


                $video = Video::create([
                    'disk'          => 'videos_disk',
                    'original_name' =>$request->media[$i]->getClientOriginalName(),
                    'path'          =>$request->media[$i]->store('videos', 'videos_disk'),
                ]);
        
                $this->dispatch(new ConvertVideoForDownloading($video));
                $this->dispatch(new ConvertVideoForStreaming($video));
        
            } else {
                $data = new Lesson();
                if (!empty($request->media[$i])) {
                    $file = upload_file($request->media[$i], 'lession');
                    $data->media = $file;
                    $data->media_type = $request->media[$i]->getClientMimeType();
                    $data->original_name = $request->media[$i]->getClientOriginalName();

                }
                $data->course_id = $request->course_id;
                $data->lession_name = $request->lession_name[$i];
                $data->save();
            }
        }
        return redirect('admin/course/question/edit/' . $request->course_id)->with('success', 'Course add successfully');
    }
    public function questionEdit($id)
    {
        $data = Question::where('course_id', $id)->get();
        return view('admin.course.question_edit', compact('data', 'id'));
    }
    public function questionUpdate(Request $request)
    {
        $user_id = Auth::id();
        $count = count($request->question);
        for ($i = 0; $i < $count; $i++) {
            if (isset($request->id[$i])) {
                $lesson = Question::where('id', $request->id[$i])->first();
                $lesson->course_id = $request->course_id;
                $lesson->question = $request->question[$i];
                $lesson->option1 = $request->option1[$i];
                $lesson->option2 = $request->option2[$i];
                $lesson->option3 = $request->option3[$i];
                $lesson->option4 = $request->option4[$i];
                $lesson->right_answer = $request->right_answer[$i];
                $lesson->save();
            } else {
                $lessons = new Question();
                $lessons->course_id = $request->course_id;
                $lessons->user_id = $user_id;
                $lessons->question = $request->question[$i];
                $lessons->option1 = $request->option1[$i];
                $lessons->option2 = $request->option2[$i];
                $lessons->option3 = $request->option3[$i];
                $lessons->option4 = $request->option4[$i];
                $lessons->right_answer = $request->right_answer[$i];
                $lessons->status = 0;
                $lessons->save();
            }
        }
        return redirect('/admin/home')->with('success', 'Course add successfully');
    }
    public function deleteCourse(Request $request)
    {
        $file = Lesson::where('course_id', $request->id)->get();
        foreach ($file as $value) {
            if (File::exists(public_path('storage/'.$value->media))) {
                File::delete(public_path('storage/'.$value->media));
            }
        }
        $data = Course::where('id', $request->id)->update(['status' => 2]);
        return redirect('/admin/home')->with('success', 'Course Deleted successfully');
    }
}
