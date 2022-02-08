<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmptyController extends Controller
{
    public function AdminEmpty(){
        return view('admin.admin_empty');
    }
}
