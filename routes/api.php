<?php

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BlogController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CauseController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


 
Route::resource('blog', BlogController::class);
Route::resource('task', TaskController::class);
Route::post('/updat-blog',[BlogController::class,'updateBlog'])->name('updateBlog');
Route::post('/register',[UserController::class,'register'])->name('register');
Route::post('/signin',[UserController::class,'signin'])->name('signin');

Route::post('/cause/store',[CauseController::class,'store'])->name('admin.cause.store');