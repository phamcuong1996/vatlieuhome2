<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function index()
    {
        $banners = Banner::with('category')->simplePaginate(5);
        $category = Category::all();

        return view('admin.banners.index', compact('banners','category'));
    }

    public function create()
    {
        $banners = Banner::with('category')->get();
        $category = Category::all();

        return view('admin.banners.create',compact('category','banners'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|unique:banners|max:255',
        ],[
            'name.required' => 'Bạn cần nhập tên',
            'name.unique' => 'Tên đã được sử dụng',
            'name.max' => 'Tên không quá 255 ký tự',
        ]);

        if ($request->has('file_update')) {
            $file = $request->file_update;
            $ext = $request->file_update->extension();
            $file_name = time().'-'.'product.'.$ext;
//            dd($file_name);
            $file->move(public_path('update'), $file_name);
        }
        $request->merge(['image' => $file_name]);
        $data = $request->all();

        Banner::create($data);

        return redirect()->route('admin.banners.index')->with('success','Thêm banner thành công !');
    }

    public function edit(int $id)
    {
        $banner = Banner::find($id);
        $category = Category::all();

        return view('admin.banners.edit', compact('banner','category'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required|unique:banners|max:255',
        ],[
            'name.required' => 'Bạn cần nhập tên',
            'name.unique' => 'Tên đã được sử dụng',
            'name.max' => 'Tên không quá 255 ký tự',
        ]);

        $data = $request->all();
        $banner = Banner::find($id);
        $banner->update($data);

        return redirect()->route('admin.banners.index')->with('success','Sửa banner thành công !');
    }

    public function destroy($id)
    {
        $banner = Banner::find($id);
        $banner->delete();

        return redirect()->route('admin.banners.index')->with('success','Xóa banner thành công !');
    }
}
