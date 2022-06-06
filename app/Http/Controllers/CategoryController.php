<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        return view('admin.categories.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        Category::create($data);

        return redirect()->route('admin.categories.index');
    }

    public function edit(int $id)
    {
        $categories = Category::find($id);

        return view('admin.categories.edit', compact('categories'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $categories = Category::find($id);
        $categories->update($data);

        return redirect()->route('admin.categories.index');
    }

    public function destroy($id)
    {
        $categories = Category::find($id);
        $categories->delete();

        return redirect()->route('admin.categories.index');
    }
}
