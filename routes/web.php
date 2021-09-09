<?php

use App\Http\Controllers\CoordinatorController;
use App\Http\Controllers\MailController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\StudentController;
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
    return view('welcome');
});


Route::post('/auth/save',[MainController::class, 'save'])->name('auth.save');
Route::post('/auth/check', [MainController::class, 'check'])->name('auth.check');
Route::get('/auth/logout',[MainController::class, 'logout'])->name('auth.logout');
Route::get('/auth/send-email',[MailController::class,'sendEmail'])->name('auth.email');

Route::get('/coordinator/dashboard',[MainController::class, 'dashboard'])->name('coordinator.dashboard');
Route::get('/coordinator/assignstudent',[CoordinatorController::class, 'assignstudent']);

Route::get('/admin/changepassword', [MainController::class, 'changepassword'])->name('admin.changepassword');

Route::get('/addstudent',[StudentController::class, 'addStudent'])->name('student.add');
Route::post('/addstudent',[StudentController::class, 'saveStudent'])->name('student.save');
Route::get('/liststudent',[StudentController::class, 'studentList'])->name('student.list');
Route::get('/editstudent/{id}',[StudentController::class, 'studentEdit'])->name('student.edit');
Route::get('/deletestudent/{id}',[StudentController::class, 'studentDelete'])->name('student.delete');
Route::get('/assignstudent/{id}',[StudentController::class, 'studentAssign'])->name('student.assign');
Route::get('/updatestudent',[StudentController::class, 'updateStudent'])->name('update.student');

Route::group(['middleware'=>['AuthCheck']], function(){
    Route::get('/auth/login',[MainController::class, 'login'])->name('auth.login');
    Route::get('/auth/register',[MainController::class, 'register'])->name("auth.register");
    Route::get('/admin/dashboard',[MainController::class, 'dashboard'])->name('admin.dashboard');
});

