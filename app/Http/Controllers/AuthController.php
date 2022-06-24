<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Monolog\Handler\NewRelicHandler;
use Str;
class AuthController extends Controller
{
    public function showFormRegister()
    {
        return view('admin.auth.register');
    }

    public function register( Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|unique:users',
            'name' => 'required'
        ],[
            'email.required' => 'Bạn cần nhập email',
            'name.required' => 'Bạn cần nhập tên',
            'email.unique' => 'Email này đã tồn tại'
        ]);
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->token = strtoupper(Str::random(20));
        $user->save();
        Mail::send('emails.active_account', compact('user',), function ($email) use($user){
            $email->subject('VatLieuHome-Shop');
            $email->to($user->email,$user->name);
        });

        return redirect()->route('show-form-register')->with('success', 'Chúc Mừng Bạn Đã Đăng Đăng Ký Thành Công !! !');
    }

    public function showFormLogin(){
        return view('admin.auth.login');
    }

    public function login(Request $request)
    {
        if (Auth::attempt([
            'email' => $request->email,
            'password' => $request->password])) {
            return redirect()->route('show-profile');
        }else
        return redirect()->route('show-form-login')->with('error', 'Email Hoặc Mật Khẩu Không Chính Xác');
    }

    public function showProfile(){
        if (Auth::check()) {
            return view('admin.auth.profile');
        }
        return redirect()->route('show-form-login');
    }

    public function Profile(Request $request){
       $user = User::find(\auth()->id());
       $user->name = $request->name;
        if ($request->change_password == 'on') {
            $user->password = bcrypt($request->password);
        }
        $user->save();

        return redirect()->route('show-profile')->with('success','Cập Nhật Thành Công');
    }

    public function logout(){
        Auth::logout();

        return redirect()->route('show-form-login');
    }

    public function active(User $user, $token)
    {
        if ($user->token === $token) {
            $user->update(['status' => 1]);
            return 'Xac nhan tai khoan thanh cong';
        } else {
            return 'XU lys tiep';
        }
    }

    public function forgetPass()
    {
        return view('admin.auth.forget_pass');
    }
}
