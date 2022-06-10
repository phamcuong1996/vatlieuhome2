<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function index()
    {
        $banners = Banner::with('category')->simplePaginate(3);
        $category = Category::all();

        return view('admin.banners.index', compact('banners','category'));
    }

    public function create()
    {
        return view('admin.banners.create');
    }

    public function store(Request $request)
    {
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

        return redirect()->route('admin.banners.index');
    }

    public function edit(int $id)
    {
        $banner = Banner::find($id);

        return view('admin.banners.edit', compact('banner'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $banner = Banner::find($id);
        $banner->update($data);

        return redirect()->route('admin.banners.index');
    }

    public function destroy($id)
    {
        $banner = Banner::find($id);
        $banner->delete();

        return redirect()->route('admin.banners.index');
    }
}
