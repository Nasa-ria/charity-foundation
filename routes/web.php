<?php

use App\Models\Volunteer;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CauseController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\UserDashboardController;
use App\Http\Controllers\AdminDashboardController;

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
// Route::middleware(['auth'])->group(function () {
//     // Define your protected routes here
//     // Route::get('/admin', 'UserDashboardController@index');
//     Route::get('/todolist',[UserDashboardController::class,'todolist'])->name('todolist');
//     Route::get('/blogform',[UserDashboardController::class,'blogform'])->name('blogform');

// });

Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {

    Route::prefix('cause')->name('cause.')->group(function () {
        Route::resource('cause', CauseController::class);
        Route::get('/cause/search', [CauseController::class, 'search'])->name('search');
    });

    Route::prefix('event')->name('event.')->group(function () {
        Route::resource('event', EventController::class);
    });

    Route::prefix('form')->name('form.')->group(function () {
        Route::get('/formlist', [AdminDashboardController::class, 'formlist'])->name('formlist');
        Route::get('/post', [AdminDashboardController::class, 'post'])->name('post');
        Route::get('/gallary', [GalleryController::class, 'index'])->name('gallary.index');
        Route::get('/gallary/create', [GalleryController::class, 'create'])->name('gallary.create');
        Route::post('/gallary/store', [GalleryController::class, 'store'])->name('gallary.store');
    });

    Route::get('/', [AdminDashboardController::class, 'index'])->name('index');
    Route::get('/form/event', [AdminDashboardController::class, 'event'])->name('event');
    Route::get('/task/create', [TaskController::class, 'create'])->name('task.create');
    // Route::post('/task/store', [TaskController::class, 'store'])->name('task.store');
    Route::post('/task/store', function () {
        Log::debug("test");
    })->name('task.store');

    // ))
    Route::get('/task/show/{id}', [TaskController::class, 'show'])->name('task.show');
    Route::get('/task/index', [TaskController::class, 'index'])->name('task.index');
    Route::get('/create/user', [AdminDashboardController::class, 'CreateUser'])->name('user.create');
     Route::post('/user/store', [UserController::class, 'StoreUser'])->name('user.store');
    Route::get('/tables/userDashboard', [UserController::class, 'index'])->name('userDashboard');
});

Route::prefix('user')->name('user.')->group(function () {
    Route::get('/', [UserDashboardController::class, 'index'])->name('index');
    Route::get('/login/facebook', [UserController::class, 'loginWithfacebook'])->name('facebook');
    Route::post('/facebook/callback', [UserController::class, 'loginWithfaceCallback'])->name('facebook.callback');
    Route::get('/login/google', [UserController::class, 'loginWithgoogle'])->name('google');
    Route::post('/google/callback', [UserController::class, 'handleGoogleCallback'])->name('google.callback');
    Route::post('/forgetpassword', [UserController::class, 'forget_password'])->name('forget.password');
    Route::get('/forgetpassword', [UserController::class, 'forgetpassword'])->name('forgetpassword');
    Route::get('/event', [UserDashboardController::class, 'event'])->name('event');
    Route::get('/blog', [UserDashboardController::class, 'blog'])->name('blog');
    Route::get('/singleBlog', [UserDashboardController::class, 'singleBlog'])->name('singleBlog');
    Route::get('/singleCause', [UserDashboardController::class, 'singleCause'])->name('singleCause');
    Route::get('/singleEvent', [UserDashboardController::class, 'singleEvent'])->name('singleEvent');
    Route::get('/contact', [UserDashboardController::class, 'contact'])->name('contact');
    Route::get('/about', [UserDashboardController::class, 'about'])->name('about');
    Route::get('/volunteer', [UserDashboardController::class, 'volunteer'])->name('volunteer');
    Route::post('/volunteer/store', [UserController::class, 'FormVolunteer'])->name('volunteer.store');
    Route::get('/register', [UserDashboardController::class, 'register'])->name('register');
    Route::post('/register', [UserController::class, 'register'])->name('register.post');
    Route::get('/login', [UserDashboardController::class, 'login'])->name('login');
    Route::post('/login', [UserController::class, 'signIn'])->name('login.post');
    Route::get('/tables/profile/{id}', [UserController::class, 'profile'])->name('profile');
    Route::get('/donate', [UserDashboardController::class, 'donate'])->name('donate');
    Route::get('/cause', [UserDashboardController::class, 'cause'])->name('cause');
    Route::get('/forgot-password', [UserController::class, 'forget_password'])->middleware('guest')->name('password.request');
    Route::post('/forgot-password', [UserController::class, 'forgetpassword'])->middleware('guest')->name('password.request.form');
    Route::get('/reset-password/{token}', [UserController::class, 'password_reset'])->middleware('guest')->name('password.reset');
    Route::post('/reset-password/{token}', [UserController::class, 'passwordreset'])->middleware('guest')->name('password.reset.form');
    Route::get('/send-resetpassword-email', [EmailController::class, 'forgetpasswordEmail'])->name("forget.password.Email");
});
