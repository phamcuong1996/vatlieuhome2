<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::with('category')->simplePaginate(10);
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
        $validated = $request->validate([
            'title' => 'required|unique:posts|max:255',
            'short_content' => 'required|unique:posts',
            'content' => 'required',
        ],[
            'title.required' => 'Bạn cần nhập tiêu đề',
            'short_content.required' => 'Bạn cần nhập nội dung ngắn',
            'content.required' => 'Bạn cần nhập nội dung',
            'title.unique' => 'Tiêu đề đã tồn tại',
            'short_content.unique' => 'Nội dung ngắn đã tồn tại',
            'content.unique' => 'Nội dung đã tồn tại',
            'title.max' => 'Tiêu đề không được quá 255 ký tự',
        ]);
        $data = $request->all();
        if ($request->has('file_update')) {
            $file = $request->file_update;
            $ext = $request->file_update->extension();
            $file_name = time().'-'.'product.'.$ext;
//            dd($file_name);
            $file->move(public_path('update'), $file_name);
        }
        $request->merge(['image' => $file_name]);
        $data = $request->all();

        Post::create($data);

        return redirect()->route('admin.posts.index')->with('success','Thêm bài viết thành công !');
    }

    public function edit(int $id)
    {
        $post = Post::find($id);
        $category = Category::all();

        return view('admin.posts.edit', compact('post','category'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $post = Post::find($id);
        $post->update($data);

        return redirect()->route('admin.posts.index')->with('success','Sửa bài viết thành công !');
    }

    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();

        return redirect()->route('admin.posts.index')->with('success','Xóa bài viết thành công !');
    }
}
