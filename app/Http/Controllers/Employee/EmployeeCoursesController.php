<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use App\Models\LicenseKey;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EmployeeCoursesController extends Controller
{
    public function Courses(){
        $data = LicenseKey::join('purchase_course','employee_license.license_key','=','purchase_course.purchase_key')->join('users','users.id','=','purchase_course.user_id')
       ->select('users.company_name','users.id','users.email','users.profile_pic','users.first_name','users.last_name')
        ->where('employee_license.user_id',Auth::id())
        ->distinct()
        ->paginate(9);
        return view('Employee.courses',compact('data'));
    }
}
