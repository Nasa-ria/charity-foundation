<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

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
Route::middleware(['auth'])->group(function () {
    // Define your protected routes here
    // Route::get('/admin', 'DashboardController@index');
    Route::get('/todolist',[DashboardController::class,'todolist'])->name('todolist');
    Route::get('/blogform',[DashboardController::class,'blogform'])->name('blogform');

});


Route::get('/',[DashboardController::class,'index'])->name('home');
Route::get('/login/facebook', [DashboardController::class,'loginWithFacebook'])->name('loginWithFavebook');
Route::get('/facebook/callback', [DashboardController::class,'loginWithFacebookCallback'])->name('loginWithFacebookCallback');  
Route::get('/login/google', [DashboardController::class,'loginWithGoogle'])->name('loginWithGoogle');
Route::get('/google/callback', [DashboardController::class,'loginWithGoogleCallback'])->name('loginWithGoogleCallback');  
Route::get('/login',[DashboardController::class,'login'])->name('login');
Route::get('/register',[DashboardController::class,'register'])->name('register');
Route::get('/donate',[DashboardController::class,'donate'])->name('donate');
Route::get('/cause',[DashboardController::class,'cause'])->name('cause');
Route::get('/event',[DashboardController::class,'event'])->name('event');
Route::get('/blog',[DashboardController::class,'blog'])->name('blog');
Route::get('/singleBlog',[DashboardController::class,'singleBlog'])->name('singleBlog');
Route::get('/singleCause',[DashboardController::class,'singleCause'])->name('singleCause');
Route::get('/singleEvent',[DashboardController::class,'singleEvent'])->name('singleEvent');
Route::get('/contact',[DashboardController::class,'contact'])->name('contact');
Route::get('/about',[DashboardController::class,'about'])->name('about');
Route::get('/volunteer',[DashboardController::class,'volunteer'])->name('volunteer');
Route::get('/admin',[DashboardController::class,'admin'])->name('admin');
