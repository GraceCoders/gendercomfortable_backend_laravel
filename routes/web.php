<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\IndexController;
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
//comapny

use App\Http\Controllers\Company\SignupcompanyController;
use App\Http\Controllers\Company\CompanyhomeController;
use App\Http\Controllers\Company\Checkout2Controller;

use App\Http\Controllers\Company\CheckoutController;
use App\Http\Controllers\Company\PaymentoptionController;
use App\Http\Controllers\Company\PaymentsuccessController;
use App\Http\Controllers\Company\PurchascourseController;
use App\Http\Controllers\Company\PurchageCoursestatController;
use App\Http\Controllers\Company\Index2Controller;
use App\Http\Controllers\Company\EditProfile2Controller;
use App\Http\Controllers\Company\Coursedetails2Controller;
use App\Http\Controllers\Company\Login2Controller;
use App\Http\Controllers\Company\AddcardController;

// Employee
use App\Http\Controllers\Employee\SignupEmployeeController;
use App\Http\Controllers\Employee\TestController;
use App\Http\Controllers\Employee\Test_resultController;
use App\Http\Controllers\Employee\course_lessionController;
use App\Http\Controllers\Employee\Courses2Controller;
use App\Http\Controllers\Employee\coursesController;
use App\Http\Controllers\Employee\CompleteCourseController;
use App\Http\Controllers\Employee\Company_CoursesController;
use App\Http\Controllers\Employee\Company_detailsController;
use App\Http\Controllers\Employee\CertificationController;
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
    return view('admin/index');
});
Route::get('/admin',[SignupController::class, 'signup'])->name('admin.signup');
Route::post('/admin_register',[SignupController::class, 'register'])->name('admin.register');

Route::get('user/login',[LoginController::class, 'Login'])->name('login');

Auth::routes();
Route::group(['middleware' => 'admin'], function () {

Route::prefix('/admin')->group(function () {
Route::get('/index',[IndexController::class, 'index'])->name('admin.index');
Route::get('/home',[AdminController::class, 'Admin'])->name('admin.home');
Route::get('/admin',[EmptyController::class, 'AdminEmpty']);
Route::get('/course/{id}',[UploadController::class, 'upload']);
Route::post('/lession',[CreateCourseController::class, 'addlession'])->name('admin.add.lession');
Route::get('/create/test/{id}',[CreatetestController::class, 'createtest'])->name('admin.create.test');
Route::post('/add/question',[CreatetestController::class, 'addQuestion'])->name('admin.add.question');
Route::get('/edit/profile',[EditprofileController::class, 'edit'])->name('admin.edit.profile');
Route::post('/update/profile',[EditprofileController::class, 'updateProfile'])->name('admin.update.profile');

Route::get('/create_course',[CreateCourseController::class, 'createcourse'])->name('admin.coures.view');
Route::post('/create_course',[CreateCourseController::class, 'addCourse'])->name('admin.add.course');
Route::get('/publish/course/{id}',[CourseDetailsController::class, 'coursedetail'])->name('admin.publish.course');
Route::get('/change/password',[ChangePassController::class, 'changepass'])->name('admin.change.password');
Route::post('/update/password',[ChangePassController::class, 'updatePassword'])->name('admin.update.password');

});
});
Route::group(['middleware' => 'employee'], function () {
});
Route::group(['middleware' => 'user'], function () {
});

// Company routes
Route::prefix('/company')->group(function () {
Route::get('/signup_company',[ SignupcompanyController::class, 'Signupcompany'])->name('company.signup');
Route::post('/company_register',[SignupcompanyController::class, 'register'])->name('company.register');
Route::get('/company_home',[CompanyhomeController ::class, 'Companyhome']);
Route::get('/checkout',[CheckoutController ::class, 'Checkout']);
Route::get('/checkout2',[Checkout2Controller ::class, 'Checkout2']);
Route::get('/payment_option',[PaymentoptionController::class, 'Paymentoption']);
Route::get('/payment_success',[PaymentsuccessController::class, 'Paymentsucess']);
Route::get('/purchased_courses',[ PurchascourseController::class, 'Purchasecourse']);
Route::get('/purchase_course stat',[PurchageCoursestatController::class, 'Purchasestat']);
Route::get('/index2',[Index2Controller::class, 'Index2'])->name('company.index2');
Route::get('/edit_profile2',[EditProfile2Controller ::class, 'Editprofile2']);
Route::get('/course_details2',[Coursedetails2Controller::class, 'Coursedetail2']);
Route::get('/login2',[Login2Controller::class, 'Logincompany']);
Route::get('/add_card',[AddcardController::class, 'Addcard']);
});

//employee
    Route::prefix('/company')->group(function () {
    Route::get('/signup_employee',[ SignupEmployeeController::class, 'SignupEmployee'])->name('company.signup');
    Route::get('/company_details',[Company_detailsController ::class, 'CompanyDetails']);
    Route::get('/company_courses',[Company_coursesController ::class, 'Companycourses']);
    Route::get('/complete course',[CompleteCourseController::class, 'Paymentoption']);
    Route::get('/course_lession',[course_lessionController::class, 'Courselession']);
    Route::get('/courses',[ CoursesController::class, 'Course']);
    Route::get('/courses2',[Courses2Controller::class, 'Course2']);
    Route::get('/login',[Index2Controller::class, 'Index2']);
    Route::get('/test_result',[Test_resultController ::class, 'Test_result']);
    Route::get('/test',[TestController::class, 'Test']);
    Route::get('/certification',[CertificationController::class, 'Certification']);
    });

?>
