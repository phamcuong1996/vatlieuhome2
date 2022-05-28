<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Product;
use Illuminate\Http\Request;

class FeController extends Controller
{
    public function index()
    {
        $chongTham = Product::where('category_id', 1)->limit(4)->get();
        $keoDan = Product::where('category_id', 5)->limit(4)->get();
        $thepXayDung = Product::where('category_id', 12)->limit(4)->get();
        $hot = Product::where('type', 1)->limit(7)->get();
        $sale = Product::where('type', 2)->limit(4)->get();
        $new = Product::where('type', 3)->limit(6)->get();
        $posts = Post::where('category_id', 1)->get();

        return view('fe.index.index', compact('chongTham', 'keoDan', 'thepXayDung', 'hot','sale', 'new','posts'));
    }

    public function productDetail(int $id)
    {
        $product = Product::find($id);

        return view('products.detail', compact('product'));
    }

    public function getProductsByCategoryId(int $id)
    {
        $products = Product::where('category_id', $id)->get();
        dd($products);
        return view('products.list', [
            'product' => $products
        ]);
    }
}
