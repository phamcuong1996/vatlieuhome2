<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('category')->simplePaginate(10);

        return view('admin.products.index', [
            'products' => $products
        ]);
    }

    public function create(Request $request)
    {
        $products = Product::with('category')->get();

        return view('admin.products.create',compact('products'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'code' => 'required|unique:products|max:4',
            'name' => 'required|unique:products|max:255',
            'price' => 'required',
            'original_price' => 'required',

        ],[
            'code.required' => 'Bạn cần nhập mã sản phẩm',
            'name.required' => 'Bạn cần nhập tên sản phẩm',
            'price.required' => 'Bạn cần nhập giá sản phẩm',
            'original_price.required' => 'Bạn cần nhập giá khuyến mãi',
            'code.unique' => 'Mã sản phẩm đã tồn tại',
            'name.unique' => 'Tên sản phẩm đã tồn tại',
            'code.max' => 'Mã sản phẩm tối đa 5 số',
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

        return redirect()->route('admin.products.index');
    }

    public function show()
    {
        $products = Product::all();

        return view('admin.products.detail', ['products' => $products]);
    }

    public function edit(int $id)
    {
        $product = Product::find($id);

        return view('admin.products.edit', ['product' => $product]);
    }

    public function update(Request $request, int $id)
    {
        $data = $request->all();
        $product = Product::find($id);
        $product->update($data);

        return redirect('admin/products/index');
    }

    public function destroy(int $id)
    {
        $product = Product::find($id);
        $product->delete();

        return redirect('admin/products/index');
    }

}
