<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;

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


Route::get('/',[IndexController::class,'index'])->name('home');

Route::get('/login',[IndexController::class,'login'])->name('login');
Route::get('/register',[IndexController::class,'register'])->name('register');
Route::get('/donate',[IndexController::class,'donate'])->name('donate');
Route::get('/cause',[IndexController::class,'cause'])->name('cause');
Route::get('/event',[IndexController::class,'event'])->name('event');
Route::get('/blog',[IndexController::class,'blog'])->name('blog');
Route::get('/singleBlog',[IndexController::class,'singleBlog'])->name('singleBlog');
Route::get('/singleCause',[IndexController::class,'singleCause'])->name('singleCause');
Route::get('/singleEvent',[IndexController::class,'singleEvent'])->name('singleEvent');
Route::get('/contact',[IndexController::class,'contact'])->name('contact');
Route::get('/about',[IndexController::class,'about'])->name('about');
Route::get('/volunteer',[IndexController::class,'volunteer'])->name('volunteer');