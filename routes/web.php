<?php

use App\Http\Controllers\NoteController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SpecializationController;
use App\Http\Controllers\Student11Controller;
use App\Http\Controllers\Student12Controller;
use App\Http\Controllers\UniverstyController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('11student')->group(function(){
    Route::get('login',[Student11Controller::class,'Index'])->name('11student_form');
    Route::post('/login/11student',[Student11Controller::class,'Login'])->name('11student.login');
    Route::get('/dashboard',[Student11Controller::class,'Dashboard'])->name('11student.dashboard')->middleware('student11');
    Route::get('/logout',[Student11Controller::class,'Student11Logout'])->name('11student.logout')->middleware('student11');
    Route::get('/change/password',[Student11Controller::class, 'ChangePassword'])->name('11student.change.password')->middleware('student11');
    Route::post('/update/password',[Student11Controller::class, 'UpdatePassword'])->name('11student.update.password')->middleware('student11');
    Route::get('/profile',[Student11Controller::class, 'Profile'])->name('11student.profile')->middleware('student11');
    Route::post('/store/profile',[Student11Controller::class, 'StoreProfile'])->name('11student.store.profile')->middleware('student11');

    Route::get('/all/exams',[Student11Controller::class, 'AllExams'])->name('students.exam')->middleware('student11');
    Route::get('/exam/{id}',[Student11Controller::class, 'StudentExam'])->name('student.exam')->middleware('student11');

    Route::get('/my/notes',[NoteController::class, 'MyStudent11Notes'])->name('mynotes.student11')->middleware('student11');
    Route::post('/add/note11',[NoteController::class,'AddNote11'])->name('add.note11')->middleware('student11');
    Route::post('/delete/note/{id}',[NoteController::class, 'DeleteNote11'])->name('delete.note11')->middleware('student11');
});

Route::prefix('12student')->group(function(){
    Route::get('login',[Student12Controller::class,'Index'])->name('12student_form');
    Route::post('/login/12student',[Student12Controller::class,'Login'])->name('12student.login');
    Route::get('/dashboard',[Student12Controller::class,'Dashboard'])->name('12student.dashboard')->middleware('student12');
    Route::get('/logout',[Student12Controller::class,'Student12Logout'])->name('12student.logout')->middleware('student12');
    Route::get('/change/password',[Student12Controller::class, 'ChangePassword'])->name('12student.change.password')->middleware('student12');
    Route::post('/update/password',[Student12Controller::class, 'UpdatePassword'])->name('12student.update.password')->middleware('student12');
    Route::get('/profile',[Student12Controller::class, 'Profile'])->name('12student.profile')->middleware('student12');
    Route::post('/store/profile',[Student12Controller::class, 'StoreProfile'])->name('12student.store.profile')->middleware('student12');

    Route::get('/my/notes12',[NoteController::class, 'MyStudent12Notes'])->name('mynotes.student12')->middleware('student12');
    Route::post('/add/note12',[NoteController::class,'AddNote12'])->name('add.note12')->middleware('student12');
    Route::post('/delete/note12/{id}',[NoteController::class, 'DeleteNote12'])->name('delete.note12')->middleware('student12');

    Route::get('/all/univesties',[UniverstyController::class, 'AllUniversties'])->name('student12.universties')->middleware('student12');
    Route::get('/show/details/{id}',[UniverstyController::class, 'UniverstyDetails'])->name('universty.details')->middleware('student12');
    Route::get('/universty/specilazation/{id}',[UniverstyController::class, 'UniverstySpecilazation'])->name('universty.specialization')->middleware('student12');

    Route::get('/all/specializations',[SpecializationController::class, 'AllSpecilazation'])->name('student12.specilazation')->middleware('student12');
    Route::get('/all/banners',[UniverstyController::class, 'AllBanners'])->name('student12.banners')->middleware('student12');
    Route::get('/show/banner_details/{id}',[UniverstyController::class, 'BannerDetails'])->name('banner.details')->middleware('student12');

});

require __DIR__.'/auth.php';
