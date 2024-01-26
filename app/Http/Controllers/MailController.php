<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use App\Jobs\SendEmailjob;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendEmail()
    {

        /* $details = [
            'title' => 'Mail from surfside media',
            'body' => 'this is test email from laravel 10.'
        ];

        Mail::to('zamiaswad@gmail.com')->send(new TestMail($details)); */



        return 'Email Send';
    }
}
