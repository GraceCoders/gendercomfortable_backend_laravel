<?php

use App\Http\Controllers\Api\v1\CompanyController;
use App\Http\Controllers\Api\v1\CoursesController;
use App\Http\Controllers\Api\v1\EmployeeController;
use App\Http\Controllers\Api\v1\PasswordController;
use App\Http\Controllers\Api\v1\UsersController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('/v1')->group(function () {

    Route::post('/forgot/password', [PasswordController::class, 'send_email']);
    Route::post('/signup', [UsersController::class, 'signUp']);
    Route::post('/login', [UsersController::class, 'loginUser']);
    Route::post('/forgotPassword', [UsersController::class, 'forgotPassword']);
    Route::get('/getCategory', [UsersController::class, 'getCategory']);
    Route::get('/getGenderConfortable', [EmployeeController::class, 'getGenderConfortable']);


    Route::middleware('auth:sanctum')->group(function () {
        Route::get('/userDetail', [UsersController::class, 'userDetail']);
        Route::post('/updateProfile', [UsersController::class, 'updateProfile']);
        Route::post('/changePassword', [PasswordController::class, 'changePassword']);
        Route::post('/createCourse', [CoursesController::class, 'createCourse']);
        Route::post('/questions', [CoursesController::class, 'questions']);
        Route::get('/getCourseDetail', [CoursesController::class, 'getCourseDetail']);
        Route::get('/getCourse', [CoursesController::class, 'getCourse']);
        Route::post('/buyCourse', [CompanyController::class, 'buyCourse']);
        Route::get('/getBuyCourse', [CompanyController::class, 'getBuyCourse']);
        Route::get('/getPurchaseCourse', [CoursesController::class, 'getPurchaseCourse']);
        Route::post('/logout', [UsersController::class, 'logout']);
    

        // Employee data 
        Route::post('/addLicenseKey', [EmployeeController::class, 'addLicenseKey']);
        Route::post('/addRating', [EmployeeController::class, 'addRating']);
        Route::get('/company', [EmployeeController::class, 'Company']);
        Route::get('/submitAnswer', [EmployeeController::class, 'submitAnswer']);
        Route::get('/GetEmployeeCourse', [EmployeeController::class, 'GetEmployeeCourse']);
        Route::get('/result', [EmployeeController::class, 'result']);


    });

    
});
