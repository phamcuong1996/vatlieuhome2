<?php

namespace App\Http\Controllers;

use App\Mail\Hellomail;
use App\Models\User;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function testMail()
    {
        $name = 'Test Name For Email';
        Mail::send('emails.test', compact('name'), function ($email) {
            $email->to('cuongpm0196@gmail.com','Admin VLH');
        });
    }
}
