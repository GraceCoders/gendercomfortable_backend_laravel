<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Models\AddRating;
use App\Models\User;
use App\Traits\OutputTrait;
use Exception;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    use OutputTrait;

    public function getGenderConfortable(Request $request){
        try{
        $data = User::where('user_type',2)->where('latitude','!=',null)->get();
        for($i=0;$i<count($data);$i++){
         $rating = AddRating::where('company_id',$data[$i]->id)->avg('star');
         $data[$i]->rating = $rating;
        }
        $this->sendSuccessResponse(trans("Messages.Success"), $data->toArray());
    } catch (Exception $ex) {
        $this->sendErrorOutput($ex);
    }
    } 
}
