<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\SignupController;
use App\Http\Controllers\admin\LoginController;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\EmptyController;
use App\Http\Controllers\admin\UploadController;
use App\Http\Controllers\admin\EditprofileController;
use App\Http\Controllers\admin\CreateCourseController;
use App\Http\Controllers\admin\CreatetestController;
use App\Http\Controllers\admin\CourseDetailsController;
use App\Http\Controllers\admin\ChangePassController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('auth/login');
});
Route::get('/admin/signup',[SignupController::class, 'signup'])->name('admin.signup');
Route::post('/admin_register',[SignupController::class, 'register'])->name('admin.register');

Route::get('/login',[LoginController::class, 'Login']);

Auth::routes();
Route::group(['middleware' => 'admin'], function () {

    Route::prefix('/admin')->group(function () {

Route::get('/home',[AdminController::class, 'Admin'])->name('admin.home');
Route::get('/empty',[EmptyController::class, 'AdminEmpty']);
Route::get('/upload_content',[UploadController::class, 'upload']);
Route::get('/edit profile',[EditprofileController::class, 'edit']);
Route::get('/create_course',[CreateCourseController::class, 'createcourse'])->name('admin.coures.view');
Route::get('/create test',[CreatetestController::class, 'createtest']);
Route::get('/course_details',[CourseDetailsController::class, 'coursedetail']);
Route::get('/change_password',[ChangePassController::class, 'changepass']);
});
});

Route::group(['middleware' => 'employee'], function () {
});
Route::group(['middleware' => 'user'], function () {
});
