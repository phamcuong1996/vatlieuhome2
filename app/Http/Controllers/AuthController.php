<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Auth;

class AuthController extends Controller
{
    public function getAuthLogin()
    {
        return view('admin.auth.login');
    }

    public function postAuthLogin(Request $request)
    {
        $arr = [
            'email' => $request-> email,
            'password' => $request->password
        ];
        if (Auth::attempt($arr)) {
            dd('Dang nhap thanh Cong');
        } else {
            dd('Dang nhap sai');
        }
    }
}
