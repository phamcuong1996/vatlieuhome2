<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('category')->paginate(5);

        return view('admin.products.index', [
            'products' => $products
        ]);
    }

    public function create(Request $request)
    {
        $products = Product::with('category')->get();
        $category = Category::all();

        return view('admin.products.create',compact('products','category'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'code' => 'required|unique:products|max:4',
            'name' => 'required|unique:products|max:255',
            'price' => 'required',
            'original_price' => 'required',
            'description' => 'required',
            'short_description' => 'required',

        ],[
            'code.required' => 'Bạn cần nhập mã sản phẩm',
            'name.required' => 'Bạn cần nhập tên sản phẩm',
            'price.required' => 'Bạn cần nhập giá sản phẩm',
            'original_price.required' => 'Bạn cần nhập giá khuyến mãi',
            'code.unique' => 'Mã sản phẩm đã tồn tại',
            'name.unique' => 'Tên sản phẩm đã tồn tại',
            'code.max' => 'Mã sản phẩm tối đa 5 số',
            'description.required' => 'Bạn cần nhập mô tả',
            'short_description.required' => 'Bạn cần nhập mô tả ngắn',
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

        Product::create($data);
        session()->flash('success', 'Thêm bài viết thành công !');

        return redirect()->route('admin.products.index')->with('success','Thêm sản phẩm thành công !');
    }

    public function show()
    {
        $products = Product::all();

        return view('admin.products.detail', ['products' => $products]);
    }

    public function edit(int $id)
    {
        $product = Product::find($id);
        $category = Category::all();

        return view('admin.products.edit', compact('category','product'));
    }

    public function update(Request $request, int $id)
    {
        $validated = $request->validate([
            'code' => 'required|unique:products|max:4',

        ],[
            'code.required' => 'Bạn cần nhập mã sản phẩm',
            'code.unique' =>'Mã sản phẩm đã tồn tại',
        ]);
        $data = $request->all();
        $product = Product::find($id);
        $product->update($data);

        return redirect('admin/products/index')->with('success','Sửa sản phẩm thành công !');
    }

    public function destroy(int $id)
    {
        $product = Product::find($id);
        $product->delete();

        return redirect('admin/products/index')->with('success','Xóa sản phẩm thành công !');
    }

}
