<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\ResetPasswordController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserManagementController;
use App\Http\Controllers\TypeFormController;
use App\Http\Controllers\Setting;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\ModuleController;

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

/** for side bar menu active */
function set_active( $route ) {
    if( is_array( $route ) ){
        return in_array(Request::path(), $route) ? 'active' : '';
    }
    return Request::path() == $route ? 'active' : '';
}

Route::get('/', function () {
    return view('auth.login');
});

Route::group(['middleware'=>'auth'],function()
{
    Route::get('home',function()
    {
        return view('home');
    });
    Route::get('home',function()
    {
        return view('home');
    });
});

Auth::routes();

// ----------------------------login ------------------------------//
Route::controller(LoginController::class)->group(function () {
    Route::get('/login', 'login')->name('login');
    Route::post('/login', 'authenticate');
    Route::get('/logout', 'logout')->name('logout');
    Route::post('change/password', 'changePassword')->name('change/password');
});

// ----------------------------- register -------------------------//
Route::controller(RegisterController::class)->group(function () {
    Route::get('/register', 'register')->name('register');
    Route::post('/register','storeUser')->name('register');
});

// -------------------------- main dashboard ----------------------//
Route::controller(HomeController::class)->group(function () {
    Route::get('/home', 'index')->middleware('auth')->name('home');
    Route::get('user/profile/page', 'userProfile')->middleware('auth')->name('user/profile/page');
    Route::get('teacher/dashboard', 'teacherDashboardIndex')->middleware('auth')->name('teacher/dashboard');
    Route::get('student/dashboard', 'studentDashboardIndex')->middleware('auth')->name('student/dashboard');
});

// ----------------------------- user controller -------------------------//
Route::controller(UserManagementController::class)->group(function () {
    Route::get('list/users', 'index')->middleware('auth')->name('list/users');
    Route::post('change/password', 'changePassword')->name('change/password');
    Route::get('view/user/edit/{id}', 'userView')->middleware('auth');
    Route::post('user/update', 'userUpdate')->name('user/update');
    Route::post('user/delete', 'userDelete')->name('user/delete');
});

// ------------------------ setting -------------------------------//
Route::controller(Setting::class)->group(function () {
    Route::get('setting/page', 'index')->middleware('auth')->name('setting/page');
});

// ------------------------ student -------------------------------//
Route::controller(StudentController::class)->group(function () {
    Route::get('student/list', 'student')->middleware('auth')->name('student/list'); // list student
    Route::get('student/grid', 'studentGrid')->middleware('auth')->name('student/grid'); // grid student
    Route::get('student/add/page', 'studentAdd')->middleware('auth')->name('student/add/page'); // page student
    Route::post('student/add/save', 'studentSave')->name('student/add/save'); // save record student
    Route::get('student/edit/{id}', 'studentEdit'); // view for edit
    Route::post('student/update', 'studentUpdate')->name('student/update'); // update record student
    Route::post('student/delete', 'studentDelete')->name('student/delete'); // delete record student
    Route::get('student/profile/{id}', 'studentProfile')->middleware('auth'); // profile student
});

// ------------------------ teacher -------------------------------//
Route::controller(TeacherController::class)->group(function () {
    Route::get('teacher/add/page', 'teacherAdd')->middleware('auth')->name('teacher/add/page'); // page teacher
    Route::get('teacher/grid', 'teacherGrid')->middleware('auth')->name('teacher/grid');// grid teacher
    Route::get('teacher/list/page', 'teacherList')->middleware('auth')->name('teacher/list/page'); // page teacher
    Route::post('teacher/save', 'saveRecord')->middleware('auth')->name('teacher/save'); // save record
    Route::get('teacher/edit/{id}', 'editRecord'); // view teacher record
    Route::post('teacher/update', 'updateRecordTeacher')->middleware('auth')->name('teacher/update'); // update record
    Route::post('teacher/delete', 'teacherDelete')->name('teacher/delete'); // delete record teacher
    Route::get('teacher/profile/{id}', 'teacherProfile')->middleware('auth'); // profile teacher
});

// ------------------------ class -------------------------------//
Route::controller(ClassController::class)->group(function () {
    Route::get('class/add/page', 'classAdd')->middleware('auth')->name('class/add/page'); // page class
    Route::get('class/grid', 'classGrid')->middleware('auth')->name('class/grid');// grid class
    Route::get('class/list/page', 'classList')->middleware('auth')->name('class/list/page'); // page class
    Route::post('class/save', 'saveRecord')->middleware('auth')->name('class/save'); // save record
    Route::get('class/edit/{id}', 'editRecord'); // view class record
    Route::post('class/update', 'updateRecordClass')->middleware('auth')->name('class/update'); // update record
    Route::post('class/delete', 'classDelete')->name('class/delete'); // delete record class
    Route::get('class/profile/{id}', 'classProfile')->middleware('auth'); // profile class
});

// ------------------------ module -------------------------------//
Route::controller(ModuleController::class)->group(function () {
    Route::get('module/add/page', 'moduleAdd')->middleware('auth')->name('module/add/page'); // page module
    Route::get('module/grid', 'moduleGrid')->middleware('auth')->name('module/grid');// grid module
    Route::get('module/list/page', 'moduleList')->middleware('auth')->name('module/list/page'); // page module
    Route::post('module/save', 'saveRecord')->middleware('auth')->name('module/save'); // save record
    Route::get('module/edit/{id}', 'editRecord'); // view module record
    Route::post('module/update', 'updateRecordModule')->middleware('auth')->name('module/update'); // update record
    Route::post('module/delete', 'moduleDelete')->name('module/delete'); // delete record module
    Route::get('module/profile/{id}', 'moduleProfile')->middleware('auth'); // profile module
});
