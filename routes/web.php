<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\UserController;
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

Route::middleware(['role:1'])->group(function () {
    // Routes accessible only to students
    Route::get('/student-dashboard', 'StudentController@index');
});

Route::middleware(['role:2'])->group(function () {
    // Routes accessible only to teachers
    Route::get('/teacher-dashboard', 'TeacherController@index');
});

Route::get('/', [UserController::class, 'index'])->middleware('auth')->name('home');

Route::get('/register', [RegisterController::class, 'create'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('registerUser');

Route::get('/logout', [LogoutController::class, 'destroy'])->name('logout')->middleware('auth');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('loginUser');
