<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CauseController;
use App\Http\Controllers\IndexController;
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
Route::get('/admin/blogform',[DashboardController::class,'blogform'])->name('admin-blogform');
Route::get('/admin/form',[DashboardController::class,'form'])->name('admin-forms');


Route::get('/admin',[IndexController::class,'index'])->name('index');
Route::get('/charts/charjs',[IndexController::class,'chartjs'])->name('chartjs');
Route::get('/charts/flot',[IndexController::class,'flot'])->name('flot');
Route::get('/charts/inline',[IndexController::class,'inline'])->name('inline');
Route::get('/charts/uplot',[IndexController::class,'uplot'])->name('uplot');
Route::get('/examples/404',[IndexController::class,'notFound'])->name('404');
Route::get('/examples/500',[IndexController::class,'internalError'])->name('500');
Route::get('/examples/blank',[IndexController::class,'blank'])->name('blank');
Route::get('/examples/contact-us',[IndexController::class,'contactUs'])->name('contact-us');
Route::get('/examples/contacts',[IndexController::class,'contacts'])->name('contacts');
Route::get('/examples/e-commerce',[IndexController::class,'e-commerce'])->name('e-commerce');
Route::get('/examples/faq',[IndexController::class,'faq'])->name('faq');
Route::get('/examples/forgot-password-v2',[IndexController::class,'forgotPasswordV2'])->name('forgot-password-v2');
Route::get('/examples/forgot-password',[IndexController::class,'forgot-password'])->name('forgot-password');
Route::get('/examples/invoice-print',[IndexController::class,'invoicePrint'])->name('invoice-print');
Route::get('/examples/invoice',[IndexController::class,'invoice'])->name('invoice');
Route::get('/examples/language-menu',[IndexController::class,'languageMenu'])->name('language-menu');
Route::get('/examples/legacy-user-menu',[IndexController::class,'legacyUserMenu'])->name('legacy-user-menu');
Route::get('/examples/lockscreen',[IndexController::class,'lockscreen'])->name('lockscreen');
Route::get('/examples/login-v2',[IndexController::class,'loginV2'])->name('login-v2');
Route::get('/examples/login',[IndexController::class,'login'])->name('login');
Route::get('/examples/pace',[IndexController::class,'pace'])->name('pace');
Route::get('/examples/profile',[IndexController::class,'profile'])->name('profile');
Route::get('/examples/project-add',[IndexController::class,'projectAdd'])->name('project-add');
Route::get('/examples/project-detail',[IndexController::class,'projectDetail'])->name('project-detail');
Route::get('/examples/project-edit',[IndexController::class,'projectEdit'])->name('project-edit');
Route::get('/examples/projects',[IndexController::class,'projects'])->name('projects');
Route::get('/examples/recover-password-v2',[IndexController::class,'recoverPasswordV2'])->name('recover-password-v2');
Route::get('/examples/recover-password',[IndexController::class,'recover-password'])->name('recover-password');
Route::get('/examples/register-v2',[IndexController::class,'registerV2'])->name('register-v2');
Route::get('/examples/register',[IndexController::class,'register'])->name('register');
Route::get('/forms/advanced',[IndexController::class,'advanced'])->name('advanced');
Route::get('/forms/editors',[IndexController::class,'editors'])->name('editors');
Route::get('/forms/general',[IndexController::class,'formsGeneral'])->name('forms-general');
Route::get('/forms/validation',[IndexController::class,'validation'])->name('validation');
Route::get('/layout/boxed',[IndexController::class,'boxed'])->name('boxed');
Route::get('/layout/collapsed',[IndexController::class,'collapsedSidebar'])->name('collapsed-sidebar');
Route::get('/layout/fixed-footer',[IndexController::class,'fixedFooter'])->name('fixed-footer');
Route::get('/layout/fixed-sidebar-custom',[IndexController::class,'fixedSideCustom'])->name('fixed-sidebar-custom');
Route::get('/layout/fixed-sidebar',[IndexController::class,'fixedSide'])->name('fixed-sidebar');
Route::get('/layout/fixed-topnav',[IndexController::class,'fixedTopnav'])->name('fixed-topnav');
Route::get('/layoutfixed-sidebar',[IndexController::class,'fixedSide'])->name('fixed-sidebar');
Route::get('/layout/index3',[IndexController::class,'layoutIndex3'])->name('layout-index3');
Route::get('/layout/top-nav-sidebar',[IndexController::class,'topNavSidebar'])->name('top-nav-sidebar');
Route::get('/layout/top-nav',[IndexController::class,'topNav'])->name('top-nav');
Route::get('/mailbox/compose',[IndexController::class,'compose'])->name('compose');
Route::get('/mailbox/mailbox',[IndexController::class,'mailbox'])->name('mailbox');
Route::get('/mailbox/read-mail',[IndexController::class,'readMail'])->name('read-mail');
Route::get('/search/enhanced',[IndexController::class,'enhanced'])->name('enhanced');
Route::get('/search/simple',[IndexController::class,'searchSimple'])->name('search-simple');
Route::get('/tables/data',[IndexController::class,'data'])->name('data');
Route::get('/tables/jsgrid',[IndexController::class,'jsgrid'])->name('jsgrid');
Route::get('/tables/simple',[IndexController::class,'simpleTable'])->name('tables-simple');
Route::get('/UI/buttons',[IndexController::class,'buttons'])->name('buttons');
Route::get('/UI/general',[IndexController::class,'UIgeneral'])->name('UI-general');
Route::get('/UI/icons',[IndexController::class,'icons'])->name('icons');
Route::get('/UI/modals',[IndexController::class,'modals'])->name('modals');
Route::get('/UI/navbar',[IndexController::class,'navbar'])->name('navbar');
Route::get('/UI/ribbons',[IndexController::class,'ribbons'])->name('ribbons');
Route::get('/UI/sliders',[IndexController::class,'sliders'])->name('sliders');
Route::get('/UI/timeline',[IndexController::class,'timeline'])->name('timeline');
Route::get('/calender',[IndexController::class,'calender'])->name('calendar');
Route::get('/gallery',[IndexController::class,'gallery'])->name('gallery');
Route::get('/iframe',[IndexController::class,'iframe'])->name('iframe');
Route::get('/index-2',[IndexController::class,'index2'])->name('index-2');
// Route::get('/index',[IndexController::class,'index'])->name('index');
Route::get('/index2',[IndexController::class,'index2'])->name('index2');
Route::get('/index3',[IndexController::class,'index3'])->name('index3');
Route::get('/kanban',[IndexController::class,'kanban'])->name('kanban');
Route::get('/starter',[IndexController::class,'starter'])->name('starter');
Route::get('/widgets',[IndexController::class,'widgets'])->name('widgets');

Route::get('/forms/post',[IndexController::class,'post'])->name('post');
Route::get('/tables/userDashboard',[IndexController::class,'userDashboard'])->name('userDasboard');
Route::get('/To-Do/to-do',[IndexController::class,'to_do'])->name('to-do');
Route::get('/form/formlist',[IndexController::class,'formlist'])->name('formlist');
Route::get('/form/cause',[IndexController::class,'cause'])->name('cause');

// cause
Route::post('/cause/store',[CauseController::class,'store'])->name('cause.store')->middleware('web');