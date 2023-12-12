<?php

use App\Http\Controllers\ExamController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\SpecializationController;
use App\Http\Controllers\Student11Controller;
use App\Http\Controllers\Student12Controller;
use App\Http\Controllers\UniverstyController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "admin" middleware group. Make something great!
|
*/

Route::prefix('admin')->group(function(){
    Route::get('login',[AdminController::class,'Index'])->name('admin_form');
    Route::post('/login/admin',[AdminController::class,'Login'])->name('admin.login');
    Route::get('/dashboard',[AdminController::class,'Dashboard'])->name('admin.dashboard')->middleware('admin');
    Route::get('/logout',[AdminController::class,'AdminLogout'])->name('admin.logout')->middleware('admin');
    Route::get('/change/password',[AdminController::class, 'ChangePassword'])->name('change.password')->middleware('admin');
    Route::post('/update/password',[AdminController::class, 'UpdatePassword'])->name('update.password')->middleware('admin');
    Route::get('/admin/profile',[AdminController::class, 'Profile'])->name('admin.profile')->middleware('admin');
    Route::post('/store/profile',[AdminController::class, 'StoreProfile'])->name('store.profile')->middleware('admin');

    Route::get('/all/admins',[AdminController::class, 'AllAdmins'])->name('all.admins')->middleware('admin');
    Route::post('/delete/admin/{id}',[AdminController::class, 'DeleteAdmin'])->name('delete.admin')->middleware('admin');
    Route::post('/add/admin',[AdminController::class,'AddAdmin'])->name('add.admin')->middleware('admin');

    Route::get('/all/11_students',[Student11Controller::class, 'All11Students'])->name('all.11_students')->middleware('admin');
    Route::post('/delete/11_student/{id}',[Student11Controller::class, 'Delete11Student'])->name('delete.11_student')->middleware('admin');
    Route::post('/add/11_student',[Student11Controller::class,'Add11Student'])->name('add.11_student')->middleware('admin');

    Route::get('/all/12_students',[Student12Controller::class, 'All12Students'])->name('all.12_students')->middleware('admin');
    Route::post('/delete/12_student/{id}',[Student12Controller::class, 'Delete12Student'])->name('delete.12_student')->middleware('admin');
    Route::post('/add/12_student',[Student12Controller::class,'Add12Student'])->name('add.12_student')->middleware('admin');

    Route::resource('Universtey', UniverstyController::class);
    Route::post('/delete/Universtey/{id}',[UniverstyController::class, 'DeleteUniversty'])->name('delete.universty')->middleware('admin');
    Route::resource('Specialization', SpecializationController::class);
    Route::resource('Exam', ExamController::class);
    Route::resource('Question', QuestionController::class);

    Route::get('/11student/notes',[NoteController::class, 'Student11Notes'])->name('notes.student11')->middleware('admin');
    Route::post('/edit/note/{id}',[NoteController::class, 'EditStudent11'])->name('edit.note11')->middleware('admin');

    Route::get('/12student/notes',[NoteController::class, 'Student12Notes'])->name('notes.student12')->middleware('admin');
    Route::post('/edit/note12/{id}',[NoteController::class, 'EditStudent12'])->name('edit.note12')->middleware('admin');


});


require __DIR__.'/auth.php';
