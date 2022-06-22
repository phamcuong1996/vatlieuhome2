<?php

namespace App\Http\Controllers;

use App\Mail\Hellomail;
use App\Models\User;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function testMail()
    {
        $name = 'Phạm Mạnh Cường';
        Mail::send('emails.test', compact('name'), function ($email) use($name){
            $email->to('cuongpm0196@gmail.com',$name);
        });
    }
}
