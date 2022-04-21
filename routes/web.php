<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\IndexController;
use App\Http\Controllers\Admin\SignupController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\EmptyController;
use App\Http\Controllers\Admin\UploadController;
use App\Http\Controllers\Admin\EditprofileController;
use App\Http\Controllers\Admin\CreateCourseController;
use App\Http\Controllers\Admin\CreatetestController;
use App\Http\Controllers\Admin\CourseDetailsController;
use App\Http\Controllers\Admin\ChangePassController;
use App\Http\Controllers\Auth\LoginController as AuthLoginController;
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
use App\Http\Controllers\Company\Coursedetails2Controller;
use App\Http\Controllers\Company\Login2Controller;
use App\Http\Controllers\Company\AddcardController;
use App\Http\Controllers\Company\CompanyProfileController;
use App\Http\Controllers\Company\PayPalController;
// Employee
use App\Http\Controllers\Employee\SignupEmployeeController;
use App\Http\Controllers\Employee\TestController;
use App\Http\Controllers\Employee\Test_resultController;
use App\Http\Controllers\Employee\course_lessionController;
use App\Http\Controllers\Employee\Courses2Controller;
use App\Http\Controllers\Employee\EmployeeCoursesController;
use App\Http\Controllers\Employee\CompleteCourseController;
use App\Http\Controllers\Employee\Company_CoursesController;
use App\Http\Controllers\Employee\Company_detailsController;
use App\Http\Controllers\Employee\CertificationController;
use App\Http\Controllers\Employee\EditProfileController as EmployeeEditProfileController;
use App\Http\Controllers\employee\PDFController;
use App\Http\Controllers\Employee\SaveAnswerController;
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
Route::get('/',[AdminController::class, 'index']);
Route::post('/location',[AdminController::class, 'getuser'])->name('location.index');

Route::get('/admin',[SignupController::class, 'signup'])->name('admin.signup');
Route::post('/admin_register',[SignupController::class, 'register'])->name('admin.register');


Route::post('all/login',[AuthLoginController::class, 'login'])->name('all.login');

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

Route::get('/media/player/{id}',[AdminController::class, 'mediaPlayer'])->name('media.player');


Route::get('/create/course',[CreateCourseController::class, 'createcourse'])->name('admin.coures.view');
Route::post('/create_course',[CreateCourseController::class, 'addCourse'])->name('admin.add.course');
Route::get('/publish/course/{id}',[CourseDetailsController::class, 'coursedetail'])->name('admin.publish.course');
Route::get('/change/password',[ChangePassController::class, 'changepass'])->name('admin.change.password');
Route::post('/update/password',[ChangePassController::class, 'updatePassword'])->name('admin.update.password');
Route::get('/category/list',[AdminController::class, 'category'])->name('admin.category.list');
Route::post('/category/add',[AdminController::class, 'addCategory'])->name('admin.category.add');
Route::post('/category/delete',[AdminController::class, 'deleteCategory'])->name('admin.category.delete');
Route::post('/category/edit',[AdminController::class, 'editCategory'])->name('admin.category.edit');
Route::post('/category/update',[AdminController::class, 'updateCategory'])->name('admin.category.update');
Route::get('/edit/course/{id}',[CourseDetailsController::class, 'edit'])->name('admin.course.edit');
Route::post('/update/course/{id}',[CourseDetailsController::class, 'update'])->name('admin.course.update');
Route::get('/course/lesson/edit/{id}',[CourseDetailsController::class, 'lessonEdit'])->name('admin.lesson.edit');
Route::post('/course/lesson/update',[CourseDetailsController::class, 'lessonUpdate'])->name('admin.lesson.update');
Route::get('/course/question/edit/{id}',[CourseDetailsController::class, 'questionEdit'])->name('admin.question.edit');
Route::post('/course/question/update',[CourseDetailsController::class, 'questionUpdate'])->name('admin.question.update');
Route::get('/delete/course/{id}',[CourseDetailsController::class, 'deleteCourse'])->name('admin.course.delete');

});

});
Route::get('/paypal', function () {
    return view('admin/paypal');
});




// Company routes
Route::prefix('/company')->group(function () {
    Route::get('/login',[ SignupcompanyController::class, 'login'])->name('company.login');

Route::get('/signup_company',[ SignupcompanyController::class, 'Signupcompany'])->name('company.signup');
Route::post('/company_register',[SignupcompanyController::class, 'register'])->name('company.register');
Route::group(['middleware' => 'company'], function () {
    Route::get('/company/media/player/{id}',[AdminController::class, 'mediaPlayer'])->name('company.media.player');

Route::get('/home',[CompanyhomeController ::class, 'Companyhome'])->name('company.home');
Route::get('/course/detail/{id}',[Coursedetails2Controller::class, 'Coursedetail2'])->name('course.detail');
Route::get('/course/purchase/{id}',[Coursedetails2Controller::class, 'PurchaseCoures'])->name('purchase.course');

Route::get('/checkout/{id}',[CheckoutController ::class, 'Checkout'])->name('checkout');
Route::get('/checkout2',[Checkout2Controller ::class, 'Checkout2']);
Route::get('/payment_option',[PaymentoptionController::class, 'Paymentoption']);
Route::get('/payment/success/{id}',[PaymentsuccessController::class, 'Paymentsuccess'])->name('payment.success');
Route::get('/purchased_courses',[ PurchascourseController::class, 'Purchasecourse']);
Route::get('/purchase_course stat',[PurchageCoursestatController::class, 'Purchasestat']);
Route::get('/index2',[Index2Controller::class, 'Index2'])->name('company.index2');
Route::get('/profile',[CompanyProfileController ::class, 'companyProfile']);
Route::post('/purchased/courses',[ Coursedetails2Controller::class, 'course'])->name('company.purchased.courses');

Route::post('/profile/{id}',[CompanyProfileController ::class, 'updateProfile'])->name('company.update.profile');
Route::get('/password',[SignupcompanyController::class, 'changepass'])->name('company.change.password');
Route::post('/password/update',[SignupcompanyController::class, 'updatePassword'])->name('company.update.password');

Route::get('/login2',[Login2Controller::class, 'Logincompany']);
Route::get('/add_card',[AddcardController::class, 'Addcard']);


Route::get('create-transaction/{id}', [PayPalController::class, 'createTransaction'])->name('createTransaction');
Route::get('process-transaction/{id}', [PayPalController::class, 'processTransaction'])->name('processTransaction');
Route::get('success-transaction/{id}', [PayPalController::class, 'successTransaction'])->name('successTransaction');
Route::get('cancel-transaction{id}', [PayPalController::class, 'cancelTransaction'])->name('cancelTransaction');
});
});


//employee
    Route::prefix('/employee')->group(function () {
    Route::get('/log',[ CertificationController::class, 'employeelogin'])->name('login.employee');
    Route::get('/signup_employee',[ SignupEmployeeController::class, 'SignupEmployee'])->name('employee.signup');
    Route::post('/employee/register',[SignupEmployeeController::class, 'register'])->name('employee.register');
    Route::group(['middleware' => 'employee'], function () {
    Route::get('/courses',[EmployeeCoursesController::class, 'Courses'])->name('employee.home');
    Route::get('/company/details/{id}',[Company_detailsController ::class, 'CompanyDetails'])->name('employee.coursedetails');
    Route::get('/edit/profile',[EmployeeEditProfileController::class, 'editprofile'])->name('employee.edit.profile');
    Route::post('/update/profile',[EmployeeEditProfileController::class, 'updateProfile'])->name('employee.update.profile');


    Route::get('/company/{id}',[Company_detailsController ::class, 'rating'])->name('employee.company');
    Route::post('/rating',[Company_detailsController ::class, 'addrating'])->name('employee.addrating');
    Route::get('/company_courses',[Company_coursesController ::class, 'Companycourses']);
    Route::get('/search',[Company_coursesController ::class, 'search']);
    Route::get('/company_courses',[Company_coursesController ::class, 'Companycourses']);
    Route::get('/complete course',[CompleteCourseController::class, 'Paymentoption']);
    Route::get('/course/lession/{id}',[course_lessionController::class, 'Courselession'])->name('employee.course.lession');
    Route::get('/license',[Courses2Controller::class, 'Courses2']);
    Route::post('/add/license',[Courses2Controller::class, 'addlicense'])->name('add.license');
    Route::post('/save/answer',[SaveAnswerController::class, 'saveAnswer'])->name('save.answer');
    Route::get('/login',[Index2Controller::class, 'Index2']);
    Route::get('/test_result',[Test_resultController ::class, 'Test_result']);
    Route::get('/test/{id}',[TestController::class, 'Test'])->name('employee.test');
    Route::get('/certification',[CertificationController::class, 'Certification']);
    Route::get('create/pdf/{id}', [PDFController::class, 'index'])->name('create.pdf');
    });
});
?>

