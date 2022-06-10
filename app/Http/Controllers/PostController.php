<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::with('category')->simplePaginate(2);
        $category = Category::all();

        return view('admin.posts.index', compact('posts','category'));
    }

    public function create()
    {
        $posts = Post::with('category')->get();
        $category = Category::all();

        return view('admin.posts.create',compact('category','posts'));
    }

    public function store(Request $request)
    {
        $data = $request->all();
        if ($request->has('file_update')) {
            $file = $request->file_update;
            $ext = $request->file_update->extension();
            $file_name = time().'-'.'post.'.$ext;
//            dd($file_name);
            $file->move(public_path('update'), $file_name);
        }
        $request->merge(['image' => $file_name]);
        $data = $request->all();

        Post::create($data);

        return redirect()->route('posts.index');
    }

    public function edit(int $id)
    {
        $post = Post::find($id);

        return view('admin.posts.edit', compact('post'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $post = Post::find($id);
        $post->update($data);

        return redirect()->route('posts.index');
    }

    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();

        return redirect()->route('admin.posts.index');
    }
}
