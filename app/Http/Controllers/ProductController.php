<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('category')->get();

        return view('admin.products.index', [
            'products' => $products
        ]);
    }

    public function create()
    {
        return view('admin.products.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        Product::create($data);

        return redirect('admin/products/index');
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