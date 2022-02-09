<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CreatetestController extends Controller
{
    public function createtest($id){
        return view('admin.create_test',compact('id'));
    }
public function addQuestion(Request $request){
$data = $request->all();

}

}
