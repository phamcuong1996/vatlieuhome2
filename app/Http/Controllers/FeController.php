<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Product;
use App\Models\Banner;
use Illuminate\Http\Request;

class FeController extends Controller
{
    public function index()
    {
        $chongTham = Product::where('category_id', 1)->limit(4)->get();
        $keoDan = Product::where('category_id', 5)->limit(4)->get();
        $thepXayDung = Product::where('category_id', 12)->limit(4)->get();
        $hot = Product::where('type', 1)->limit(7)->get();
        $sale = Product::where('type', 2)->limit(6)->get();
        $new = Product::where('type', 3)->limit(6)->get();
        $posts = Post::where('category_id', 1)->get();
        $banners = Banner::where('category_id', 1)->get();
        $categories = Category::where('parent_id', null)->get();

        return view('fe.index.index', compact('chongTham', 'keoDan', 'thepXayDung', 'hot','sale', 'new','posts','banners','categories'));
    }

    public function productDetail(int $id)
    {
        $product = Product::find($id);
        $lists = Product::where('category_id', $id)->get();
        $categories = Category::where('parent_id', null)->get();

        return view('products.detail', compact('product','lists','categories'));
    }

    public function getProductsByCategoryId(int $id)
    {
        $products = Product::where('category_id', $id)->get();

        return view('products.list', [
            'products' => $products
        ]);
    }

    public function postDetail(int $id)
    {
        $post = Post::find($id);
        $lists = Post::where('category_id', $id)->get();

        return view('fe.posts.detail', compact('post','lists'));
    }
}
