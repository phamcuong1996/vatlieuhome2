<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function index()
    {
        $banner = Banner::all();

        return view('admin.banners.index', compact('banner'));
    }

    public function create()
    {
        return view('admin.banners.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        Banner::create($data);

        return redirect()->route('banners.index');
    }

//    public function edit(int $id)
//    {
//        $post = Post::find($id);
//
//        return view('admin.banners.edit', compact('post'));
//    }
//
//    public function update(Request $request, $id)
//    {
//        $data = $request->all();
//        $post = Post::find($id);
//        $post->update($data);
//
//        return redirect()->route('banners.index');
//    }
//
//    public function destroy($id)
//    {
//        $post = Post::find($id);
//        $post->delete();
//
//        return redirect()->route('admin.banners.index');
//    }
}
