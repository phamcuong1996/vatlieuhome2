<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Product;
use Illuminate\Http\Request;

class FeController extends Controller
{
    public function index()
    {
        $chongThamProducts = Product::where('category_id', 1)->limit(4)->get();
        $keoDanProducts = Product::where('category_id', 5)->get();
        $thepXayDungProducts = Product::where('category_id', 16)->get();
        $siliconProducts = Product::where('category_id', 12)->get();
        $postsList = Post::all();
        $duAn = Post::where('category_id', 10)->get();

        return view('fe.index.index',
            compact(
                'chongThamProducts',
                'keoDanProducts',
                'thepXayDungProducts',
                'siliconProducts',
                'postsList',
                'duAn'
            )
        );

    }

    public function getProductsByCategoryId(int $id)
    {
        $products = Product::where('category_id', $id)->get();

        return view('fe.products.list', [
            'products' => $products
        ]);
    }

    public function show()
    {
        $products = Product::all();

        return view('admin.products.detail', ['products' => $products]);
    }

    public function productDetail(int $id)
    {
        $product = Product::find($id);

        return view('products.detail', ['product' => $product]);
    }

    public function postDetail(int $id)
    {
        $post = Post::find($id);

        return view('fe.posts.detail', compact('post'));
    }

    public function getPostsByCategoryId(int $id)
    {
        $posts = Post::where('category_id', $id)->get();

        return view('fe.posts.list', [
            'posts' => $posts
        ]);
    }

}
