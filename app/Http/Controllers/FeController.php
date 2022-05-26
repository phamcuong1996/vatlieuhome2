<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Product;
use Illuminate\Http\Request;

class FeController extends Controller
{
    public function index()
    {
        $sachGiaoDuc = Product::where('category_id', 5)->limit(4)->get();
        $sachYTe = Product::where('category_id', 1)->limit(4)->get();

        return view('fe.index.index', compact('sachGiaoDuc', 'sachYTe'));
    }
}
