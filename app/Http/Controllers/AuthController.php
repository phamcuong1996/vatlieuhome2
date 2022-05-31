<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facedes\Auth;
use Monolog\Handler\NewRelicHandler;

class AuthController extends Controller
{
    public function showFormRegister()
    {
        return view('admin.auth.register');
    }

    public function register( Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();

        return redirect()->route('show-form-register')->with('success', 'dang ky thanh cong');
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
