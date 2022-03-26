<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\LicenseKey;
use App\Models\PurchaseCourse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

class Coursedetails2Controller extends Controller
{
    public function Coursedetail2($id)
    {
        $ids = Crypt::decrypt($id);
        $data = Course::with(['lessons', 'question'])->where('courses.id', $ids)->first();
        $purchaseCourse = PurchaseCourse::with('users')->where('course_id',$ids)
        ->where('status','COMPLETED')
        ->get();
        return view('company.course_details2', compact('data','purchaseCourse'));
    }
    public function course(Request $request)
    {
        $id = Auth::id();
        $new = PurchaseCourse::where('course_id',$request->course_id)->where('user_id',$id)->first();
        if($new){
        $new->no_of_seat =$new->no_of_seat+ $request->no_of_seat;
        $new->status = 1;
        $new->amount =$new->amount+ $request->price_per_seat* $request->no_of_seat;
        $new->save();
            return redirect('/company/checkout/'.Crypt::encrypt($new->id))->with('success', 'Course CheckOut Successfully');
        }else{
        $data = new  PurchaseCourse();
        $data->course_id = $request->course_id;
        $data->user_id = $id;
        $data->no_of_seat = $request->no_of_seat;
        $data->status = 1;
        $data->amount = $request->price_per_seat* $request->no_of_seat;
        $data->save();
        return redirect('/company/checkout/'.Crypt::encrypt($data->id))->with('success', 'Course CheckOut Successfully');

        }
  
            return redirect('/course/detail/' . Crypt::encrypt($request->course_id))->with('error', 'Some Thing Went wrong');
    }
    public function PurchaseCoures(Request $request,$id){

        $sum = PurchaseCourse::where('course_id' ,$id)->sum('no_of_seat');

        $data = Course::with('purchase_course')->where('id',$id)->first();
        $employee = LicenseKey::with('user')->where('license_key',$data['purchase_course']->purchase_key)->get();
        return view('company.purchase_course_stat',compact('data','sum','employee'));
    }
}
