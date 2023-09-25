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
}
