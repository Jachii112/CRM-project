<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Mail;
use App\Mail\SampleMail;

class EmailController extends Controller
{
    public function sendEmail()
    {
        $content = [
            'subject' => 'This is the mail subject',
            'body' => 'This is the email body of how to send email from Laravel 10 with mailtrap'
        ];

        Mail::to('carosmex@gmail.com')->send(new SampleMail($content));

        return "Email has been sent.";
    }
}
