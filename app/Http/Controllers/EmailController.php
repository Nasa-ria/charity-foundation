<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mail\ResetpasswordMail;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function forgetpasswordEmail()
    {
        $title = 'Welcome to the laracoding.com example email';
        $body = 'Thank you for participating!';

        Mail::to('your-recipient@domain.com')->send(new ResetpasswordMail($title, $body));

        return "Email sent successfully!";
    }
}
