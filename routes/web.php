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
Route::get('/register', [StudentController::class, 'register'])->name('register');
Route::post('/create', [StudentController::class, 'create'])->name('student.create');
Route::get('student/login', [StudentController::class, 'login'])->name('login');
Route::get('/volunteer/web', [VolunteerController::class, 'web']);
Route::get('/student/dashboard', [VolunteerController::class, 'dashboard']);
Route::get('/tailoring', Function (){
    return view('student/pages/tailoring');
});
Route::get('/web', Function (){
    return view('student/pages/web');
});
Route::get('/baking', Function (){
    return view('student/pages/baking');
});
