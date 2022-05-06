<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();

        return view('admin.users.index', compact('users'));
    }

    public function create()
    {
        return view('admin.users.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        User::create($data);

        return redirect()->route('users.index');
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

        return redirect()->route('users.index');
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect()->route('users.index');
    }
}
