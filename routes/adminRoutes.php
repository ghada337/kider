<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\UnreadController;

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['verified']], function () {
    //testimonial routes
    Route::get('testimonials',[TestimonialController::class,'index'])->name('testimonials');
    Route::get('addTestimonial',[TestimonialController::class,'create'])->name('addTestimonial');
    Route::post('storeTestimonial',[TestimonialController::class,'store'])->name('storeTestimonial');
    Route::get('showTestimonial/{id}',[TestimonialController::class,'show'])->name('showTestimonial');
    Route::get('editTestimonial/{id}',[TestimonialController::class,'edit'])->name('editTestimonial');
    Route::put('updateTestimonial/{id}',[TestimonialController::class,'update'])->name('updateTestimonial');
    Route::get('deleteTestimonial/{id}',[TestimonialController::class,'delete'])->name('deleteTestimonial');
    Route::get('trashedTestimonials',[TestimonialController::class,'trashed'])->name('trashedTestimonials');
    Route::get('restoreTestimonial/{id}',[TestimonialController::class,'restore'])->name('restoreTestimonial');
    Route::get('forceDeleteTestimonial/{id}',[TestimonialController::class,'destroy'])->name('forceDeleteTestimonial');

    //teacher routes
    Route::get('teachers',[TeacherController::class,'index'])->name('teachers');
    Route::get('addTeacher',[TeacherController::class,'create'])->name('addTeacher');
    Route::post('storeTeacher',[TeacherController::class,'store'])->name('storeTeacher');
    Route::get('showTeacher/{id}',[TeacherController::class,'show'])->name('showTeacher');
    Route::get('editTeacher/{id}',[TeacherController::class,'edit'])->name('editTeacher');
    Route::put('updateTeacher/{id}',[TeacherController::class,'update'])->name('updateTeacher');
    Route::get('deleteTeacher/{id}',[TeacherController::class,'delete'])->name('deleteTeacher');
    Route::get('trashedTeachers',[TeacherController::class,'trashed'])->name('trashedTeachers');
    Route::get('restoreTeacher/{id}',[TeacherController::class,'restore'])->name('restoreTeacher');
    Route::get('forceDeleteTeacher/{id}',[TeacherController::class,'destroy'])->name('forceDeleteTeacher');

    //classroom routes
    Route::get('classrooms',[ClassroomController::class,'index'])->name('classrooms');
    Route::get('addClassroom',[ClassroomController::class,'create'])->name('addClassroom');
    Route::post('storeClassroom',[ClassroomController::class,'store'])->name('storeClassroom');
    Route::get('showClassroom/{id}',[ClassroomController::class,'show'])->name('showClassroom');
    Route::get('editClassroom/{id}',[ClassroomController::class,'edit'])->name('editClassroom');
    Route::put('updateClassroom/{id}',[ClassroomController::class,'update'])->name('updateClassroom');
    Route::get('deleteClassroom/{id}',[ClassroomController::class,'destroy'])->name('deleteClassroom');
    //not used
    // Route::get('trashedClassrooms',[ClassroomController::class,'trashed'])->name('trashedClassrooms');
    // Route::get('restoreClassroom/{id}',[ClassroomController::class,'restore'])->name('restoreClassroom');
    // Route::get('forceDeleteClassroom/{id}',[ClassroomController::class,'destroy'])->name('forceDeleteClassroom');

    //appointment routes
    Route::get('appointments',[AppointmentController::class,'index'])->name('appointments');
    Route::get('showAppointment/{id}',[AppointmentController::class,'show'])->name('showAppointment');
    Route::get('deleteAppointment/{id}',[AppointmentController::class,'destroy'])->name('deleteAppointment');

    //contact routes
    Route::get('contacts',[ContactController::class,'index'])->name('contacts');
    Route::get('showContact/{id}',[ContactController::class,'show'])->name('showContact');
    Route::get('deleteContact/{id}',[ContactController::class,'destroy'])->name('deleteContact');

    //contact routes
    Route::get('unreadContacts',[UnreadController::class,'index'])->name('unreadContacts');
    Route::get('showContact/{id}',[UnreadController::class,'show'])->name('showContact');
    Route::get('deleteUnreadContact/{id}',[UnreadController::class,'destroy'])->name('deleteUnreadContact');

    
});