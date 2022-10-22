<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\VolunteerController;
use App\Http\Controllers\StudentController;

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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', [PagesController::class, 'home']);
Route::get('/about', [PagesController::class, 'about']);
Route::get('/contact', [PagesController::class, 'contact']);
Route::get('/support', [PagesController::class, 'support']);
Route::get('/courses', [PagesController::class, 'courses']);


// Student
Route::get('/student/register', [StudentController::class, 'register'])->name('student.register');
Route::get('/student/web', [StudentController::class, 'WebDev'])->middleware('auth');
Route::get('/student/baking', [StudentController::class, 'baking'])->middleware('auth');
Route::get('/student/tailoring', [StudentController::class, 'tailor'])->middleware('auth');
Route::post('/student/create', [StudentController::class, 'create'])->name('student.create');
Route::get('/student/login', [StudentController::class, 'login'])->name('login');
Route::get('/student/dashboard', [StudentController::class, 'dashboard'])->middleware('auth');
Route::post('/student/check', [StudentController::class, 'check'])->name('student.login');
Route::get('/student/logout', [StudentController::class, 'logout'])->name('student.logout');

// Volunteer
Route::get('/volunteer/web', [VolunteerController::class, 'webDev'])->middleware('auth');
Route::get('/volunteer/baking', [VolunteerController::class, 'baking'])->middleware('auth');
Route::get('/volunteer/tailoring', [VolunteerController::class, 'tailor'])->middleware('auth');
Route::post('/volunteer/create', [VolunteerController::class, 'create'])->name('volunteer.create');
Route::post('/volunteer/check', [VolunteerController::class, 'check'])->name('volunteer.login');
Route::get('/volunteer/dashboard', [StudentController::class, 'dashboard'])->middleware('auth');
Route::get('/volunteer/register', [VolunteerController::class, 'register'])->name('volunteer.register');
Route::get('/volunteer/login', [VolunteerController::class, 'login'])->name('login');


// Route::get('/tailoring', Function (){
//     return view('student/pages/tailoring');
// });
// Route::get('/web', Function (){
//     return view('student/pages/web');
// });
// Route::get('/baking', Function (){
//     return view('student/pages/baking');
// });
