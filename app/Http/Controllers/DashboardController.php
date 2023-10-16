<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        return view('pages.dashboard.home');
    }
    public function login(){
        return view('pages.dashboard.login');
    }
    public function register(){
        return view('pages.dashboard.register');
    }
    public function donate(){
        return view('pages.dashboard.donate');
    }
    public function cause(){
        return view('pages.dashboard.cause');
    }
    public function event(){
        return view('pages.dashboard.event');
    }
    public function blog(){
        return view('pages.dashboard.blog');
    }
    public function contact(){
        return view('pages.dashboard.contact');
    }
    public function singleEvent(){
        return view('pages.dashboard.singleEvent');
    }
    public function singleBlog(){
        return view('pages.dashboard.singleBlog');
    }
    public function singleCause(){
        return view('pages.dashboard.singleCause');
    }
    public function about(){
        return view('pages.dashboard.about');
    }
    public function volunteer(){
        return view('pages.dashboard.volunteer');
    }

    public function blogform(){
        return view('pages.admin.forms.blog');
    }
    public function todolist(){
        return view('pages.admin.todolist');
    }

    public function admin(){
        return view('pages.admin.index');
    }
}
