<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\AddRating;
use App\Models\PurchaseCourse;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class Company_detailsController extends Controller
{
    public function CompanyDetails($id){
        $data =PurchaseCourse::with('course')->where('user_id',$id)->get();
        $user = User::where('id',$id)->first();
        return view('Employee.company_courses',compact('data','user'));
    }

    public function rating($id){
        $user = User::where('id',$id)->first();
        $rating = AddRating::with('user')->where('company_id',$id)->get();
        $avg = AddRating::where('company_id',$id)->avg('star');

        return view('Employee.company_details',compact('user','rating','avg'));
    }
    public function addRating(Request $request){
        $id = Auth::id();
        $rating = AddRating::where('company_id',$request->company_id)->where('user_id',$id)->first();
        if($rating){
        $rating->user_id =$id;
        $rating->company_id =$request->company_id;
        $rating->star = $request->rate;
        $rating->feed_back =$request->feed_back;
        $rating->save();
        return  Redirect::back()->with('success','Rating Add successfully');
        }else{
        $data = new AddRating();
        $data->user_id =$id;
        $data->company_id =$request->company_id;
        $data->star = $request->rate;
        $data->feed_back =$request->feed_back;
        $data->save();
        return  Redirect::back()->with('success','Rating Add successfully');
        }
    }

    
}
