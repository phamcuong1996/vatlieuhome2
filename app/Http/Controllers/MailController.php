<?php

namespace App\Http\Controllers;

use App\Mail\Hellomail;
use App\Models\User;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function testMail()
    {
        $user = User::find(10);
        $mailable = new Hellomail($user);
        Mail::to("cuongpm0196@gmail.com")->send($mailable);
        return true;
    }
}
