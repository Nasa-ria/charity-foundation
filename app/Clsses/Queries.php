<?php

namespace App\Classes;

use GuzzleHttp\Psr7\Request;

class Queries{

Public static function SignIn($data){  {

    $credentials = $data->only('email', 'password');
    
    if (auth('web')->attempt($credentials)) {
        $user = auth('web')->user();

       return $user;
    } else {
        return "fail";
    }
}
    
}

















}