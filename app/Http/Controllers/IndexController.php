<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        return view('pages.home');
    }
    public function login(){
        return view('pages.login');
    }
    public function register(){
        return view('pages.register');
    }
    public function donate(){
        return view('pages.donate');
    }
    public function cause(){
        return view('pages.cause');
    }
    public function event(){
        return view('pages.event');
    }
    public function blog(){
        return view('pages.blog');
    }
    public function contact(){
        return view('pages.contact');
    }
    public function singleEvent(){
        return view('pages.singleEvent');
    }
    public function singleBlog(){
        return view('pages.singleBlog');
    }
    public function singleCause(){
        return view('pages.singleCause');
    }
    public function about(){
        return view('pages.about');
    }
    public function volunteer(){
        return view('pages.volunteer');
    }
}
