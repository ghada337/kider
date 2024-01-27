<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\ContactController;


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

//page routes
Route::get('index',[PageController::class,'index'])->name('index');
// Route::get('404',[PageController::class,'error'])->name('404');
Route::fallback(PageController::class)->name('404');
Route::get('about',[PageController::class,'about'])->name('about');
Route::get('appointment',[PageController::class,'appointment'])->name('appointment');
Route::get('call-to-action',[PageController::class,'callToAction'])->name('call-to-action');
Route::get('classes',[PageController::class,'classes'])->name('classes');
Route::get('contact',[PageController::class,'contact'])->name('contact');
Route::get('facility',[PageController::class,'facility'])->name('facility');
Route::get('team',[PageController::class,'team'])->name('team');
Route::get('testimonial',[PageController::class,'testimonial'])->name('testimonial');

//Pages form
Route::post('contactForm',[PageController::class,'contactForm'])->name('contactForm');
Route::post('appointmentForm',[PageController::class,'appointmentForm'])->name('appointmentForm');

Auth::routes(['verify'=>true]);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');