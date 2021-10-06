<?php

use App\Http\Controllers\CoordinatorController;
use App\Http\Controllers\MailController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SearchController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::post('/auth/save',[MainController::class, 'save'])->name('auth.save');
Route::post('/auth/save1',[MainController::class, 'save1'])->name('auth.save1');
Route::post('/auth/save2',[MainController::class, 'save2'])->name('auth.save2');
Route::post('/auth/check', [MainController::class, 'check'])->name('auth.check');
Route::get('/auth/logout',[MainController::class, 'logout'])->name('auth.logout');
Route::get('/auth/send-email',[MailController::class,'sendEmail'])->name('auth.email');

Route::get('/coordinator/dashboard',[MainController::class, 'dashboard'])->name('coordinator.dashboard');
Route::get('/coordinator/lecturer',[CoordinatorController::class, 'lecturer'])->name('coordinator.lecturer');
Route::get('/coordinator/assignsv',[CoordinatorController::class, 'assignsv'])->name('coordinator.assignsv');
Route::get('/coordinator/updatesv',[CoordinatorController::class, 'updatesv'])->name('coordinator.updatesv');
Route::get('/coordinator/viewlecturer',[CoordinatorController::class, 'viewlecturer'])->name('coordinator.viewlecturer');

Route::get('/lecturer/dashboard',[MainController::class, 'dashboard'])->name('lecturer.dashboard');

Route::get('/admin/changepassword', [MainController::class, 'changepassword'])->name('admin.changepassword');
Route::get('/admin/savepassword', [MainController::class, 'savepassword'])->name('admin.savepassword');
Route::get('/admin/viewuser' , [MainController::class, 'viewuser'])->name('admin.viewuser');

Route::get('/addstudent',[StudentController::class, 'addStudent'])->name('student.add');
Route::post('/addstudent',[StudentController::class, 'saveStudent'])->name('student.save');
Route::get('/liststudent',[StudentController::class, 'studentList'])->name('student.list');
Route::get('/editstudent/{id}',[StudentController::class, 'studentEdit'])->name('student.edit');
Route::get('/deletestudent/{id}',[StudentController::class, 'studentDelete'])->name('student.delete');
Route::get('/assignstudent/{id}',[StudentController::class, 'studentAssign'])->name('student.assign');
Route::get('/updatestudent',[StudentController::class, 'updateStudent'])->name('update.student');

Route::get('/auth/register',[MainController::class, 'register'])->name("auth.register");
Route::get('/auth/register1',[MainController::class, 'register1'])->name("auth.register1");
Route::get('/auth/register2',[MainController::class, 'register2'])->name("auth.register2");

Route::get('/import-form',[StudentController::class,'importForm'])->name('student.importform');
Route::post('/import',[StudentController::class,'import'])->name('student.import');

Route::get('/search',[SearchController::class,'search'])->name('web.search');

Route::get('/student/proposalform',[StudentController::class,'viewform'])->name('student.viewform');
Route::post('/student/proposal',[StudentController::class,'submitform'])->name('student.submitform');
Route::get('/student/consentform',[StudentController::class,'viewconsentform'])->name('student.viewconsentform');
Route::post('/student/consent',[StudentController::class,'submitconsentform'])->name('student.submitconsentform');


Route::get('/dummy', function () {
    return view('admin.dummy');
});

Route::group(['middleware'=>['AuthCheck']], function(){
    Route::get('/auth/login',[MainController::class, 'login'])->name('auth.login');
    Route::get('/admin/dashboard',[MainController::class, 'dashboard'])->name('admin.dashboard');
});

