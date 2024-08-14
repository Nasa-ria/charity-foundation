<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function  index(){
        return view('dashboard.admin.pages..index');
    }



    public function  post(){
        return view('dashboard.admin.pages.forms.tag');
    }
    public function  userDashboard(){
        return view('dashboard.admin.pages.tables.userDashboard');
    }
    
       
    public function  formlist(){
        return view('dashboard.admin.pages.forms.formlist');
    }
    

    public function  login(){
        return view('dashboard.admin.pages.register');
    }
    
 
    public function admin(){
        return view('dashboard.admin.pages.index');
    }

    public function blogform(){
        return view('dashboard.admin.pages.form.general');
    } 

    public function  notFound(){
        return view('pages.examples.404');
    }
    
    public function  internalError(){
        return view('pages.examples.500');
    }

    public function CreateUser(){
        return view('dashboard.admin.pages.register');
    }


}