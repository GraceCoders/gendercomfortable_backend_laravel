<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Models\AddRating;
use App\Models\LicenseKey;
use App\Models\PurchaseCourse;
use App\Models\User;
use App\Traits\OutputTrait;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EmployeeController extends Controller
{
    use OutputTrait;

    public function getGenderConfortable(Request $request)
    {
        try {
            $data = User::where('user_type', 2)->where('latitude', '!=', null)->get();
            for ($i = 0; $i < count($data); $i++) {
                $rating = AddRating::where('company_id', $data[$i]->id)->avg('star');
                $data[$i]->rating = $rating;
            }
            $this->sendSuccessResponse(trans("Messages.Success"), $data->toArray());
        } catch (Exception $ex) {
            $this->sendErrorOutput($ex);
        }
    }
    public function addLicenseKey(Request $request)
    {
        $id = Auth::id();
        foreach ($request->license_key as $license_key)
            $purchase = PurchaseCourse::where('purchase_key', $license_key)->first();
        if ($purchase) {
            $license = new LicenseKey();
            $license->user_id = $id;
            $license->ststus = 1;
            $license->license_key  = $license_key;
            $license->save();
            if ($license) {
                $this->sendSuccessResponse(trans("Messages.Success"), $license->toArray());
            } else {
                $this->sendErrorOutput(trans("Messages.Failed"));
            }
        } else {
            $this->sendErrorOutput(trans("Messages.LicenseKey not found !"));
        }
    }
    public function addRating(Request $request)
    {
        $id = Auth::id();
        $rating = AddRating::where('company_id', $request->company_id)->where('user_id', $id)->first();
        if ($rating) {
            $rating->user_id = $id;
            $rating->company_id = $request->company_id;
            $rating->star = $request->rating;
            $rating->feed_back = $request->feed_back;
            $rating->save();
            $this->sendSuccessResponse(trans("Messages.Success"), $rating->toArray());
        } else {
            $data = new AddRating();
            $data->user_id = $id;
            $data->company_id = $request->company_id;
            $data->star = $request->rating;
            $data->feed_back = $request->feed_back;
            $data->save();
            $this->sendSuccessResponse(trans("Messages.Success"), $data->toArray());
        }
    }
}
