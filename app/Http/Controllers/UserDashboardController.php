<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserDashboardController extends Controller
{
    public function index(){
        return view('dashboard.user.pages.home');
    }
    public function login(){
        return view('dashboard.user.pages.login');
    }
    public function register(){
        return view('dashboard.user.pages.register');
    }
    public function donate(){
        return view('dashboard.user.pages.donate');
    }
    public function cause(){
        return view('dashboard.user.pages.cause');
    }
    public function event(){
        return view('dashboard.user.pages.event');
    }
    public function blog(){
        return view('dashboard.user.pages.blog');
    }
    public function contact(){
        return view('dashboard.user.pages.contact');
    }
    public function singleEvent(){
        return view('dashboard.user.pages.singleEvent');
    }
    public function singleBlog(){
        return view('dashboard.user.pages.singleBlog');
    }
    public function singleCause(){
        return view('dashboard.user.pages.singleCause');
    }
    public function about(){
        return view('dashboard.user.pages.about');
    }
    public function volunteer(){
        return view('dashboard.user.pages.volunteer');
    }

    // public function blogform(){
    //     return view('pages.admin.forms.blog');
    // }

}
