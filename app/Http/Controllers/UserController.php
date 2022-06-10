<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Category;

class UserController extends Controller
{
    public function index()
    {
        $users = User::with('category')->simplePaginate(7);

        return view('admin.users.index', compact('users'));
    }

    public function create()
    {
        return view('admin.users.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|unique:users|max:255',
            'email' => 'required|unique:users|max:255|email',
            'password' => 'required|min:6',

        ],[
            'name.required' => 'Bạn cần nhập tên tài khoản',
            'email.required' => 'Bạn cần nhập email',
            'password.required' => 'Bạn cần nhập mật khẩu',
            'name.unique' => 'Tên tài khoản đã tồn tại',
            'email.unique' => 'Email đã tồn tại',
            'name.max' => 'Tên tối đa 255 ký tự',
            'email.max' => 'Email tối đa 255 ký tự',
            'password.min' => 'Mật Khẩu tối thiếu có 6 ký tự',
            'email.email' => 'Bạn phải nhập địa chỉ email hợp lệ',
        ]);

        $data = $request->all();
        User::create($data);

        return redirect()->route('admin.users.index')->with('success','Thêm tài khoản thành công !');
    }

    public function edit(Request $request)
    {
        $id = $request->id;
        $user = User::find($id);

        return view('admin.users.edit',compact('user'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $user = User::find($id);
        $user->update($data);

        return redirect()->route('admin.users.index')->with('success','Sửa thông tin tài khoản thành công !');
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect()->route('admin.users.index')->with('success','Xóa tài khoản thành công !');
    }
}
