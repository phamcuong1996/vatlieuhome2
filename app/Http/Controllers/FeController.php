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
        $phuTro = Product::where('category_id', 14)->limit(7)->get();

        return view('fe.index.index', compact('chongTham', 'keoDan', 'thepXayDung', 'phuTro'));
    }
}
