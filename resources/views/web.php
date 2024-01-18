<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ImageController;
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

Route::get('/', [ ArticleController::class , "showArticles" ] )->name('home')->middleware('auth');
Route::get('/articles/{id}', [ ArticleController::class , "showArticle" ] )->name('article')->middleware('auth');


Route::get('/subscribe', function () {
    return view('subscribe');
})->name('subscribe')->middleware('auth');

Route::get('/addArticle', [ArticleController::class, 'index'])->name('addArticle')->middleware('auth');

Route::post('/addArticle', [ArticleController::class, 'storeArticle'])->name('storeArticle')->middleware('auth');

Route::get('/subscribe', [UserController::class, 'index'])->name('subscribe')->middleware('auth');
Route::post('/subscribe', [UserController::class, 'storeUser'])->name('storeUser')->middleware('auth');

Route::get('/register', [RegisterController::class, 'create'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('registerUser');

Route::get('/logout', [LogoutController::class, 'destroy'])->name('logout')->middleware('auth');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('loginUser');

Route::get('/upload', [ImageController::class,'index'])->name('image');
Route::post('/upload', [ImageController::class,'store'])->name('uploadImage');
