<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use App\Models\LicenseKey;
use App\Models\PurchaseCourse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class Courses2Controller extends Controller
{
    public function Courses2()
    {
        return view('Employee.courses2');
    }
    public function addlicense(Request $request)
    {
        $count = count($request->license_key);
        for ($i = 0; $i < $count; $i++) {

            $key = PurchaseCourse::where('purchase_key',$request->license_key[$i])->first();
            if($key){
                $final = LicenseKey::where('license_key',$request->license_key[$i])->where('user_id',Auth::id())->first();
                if(empty($final)){
                    $data = new LicenseKey();
                    $data->user_id = Auth::id();
                    $data->license_key = $request->license_key[$i];
                    $data->ststus =1;
                    $data->save();
                }
               
            }else{
                return redirect('/employee/license')->with('danger', $request->license_key[$i].' License key does not exist!');
                break;
            }           
        }
        return redirect('/employee/courses')->with('success', 'License key Appied Successfully!');
    }
}
