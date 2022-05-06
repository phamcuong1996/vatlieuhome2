<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminOrderController;
use App\Http\Controllers\FeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
//
Route::get('admin/posts/index', [PostController::class, 'index'])->name('posts.index');
Route::get('admin/posts/create', [PostController::class, 'create'])->name('posts.create');
Route::post('admin/posts/store', [PostController::class, 'store'])->name('posts.store');
Route::get('admin/posts/{id}/edit', [PostController::class, 'edit'])->name('posts.edit');
Route::put('admin/posts/{id}/update', [PostController::class, 'update'])->name('posts.update');
Route::delete('admin/posts/{id}/destroy', [PostController::class, 'destroy'])->name('posts.destroy');

//Products
Route::get('admin/products/index', [ProductController::class, 'index'])->name('admin.products.index');
Route::get('admin/products/create', [ProductController::class, 'create'])->name('admin.products.create');
Route::post('admin/products/store', [ProductController::class, 'store'])->name('admin.products.store');
Route::get('admin/products/{id}/edit', [ProductController::class, 'edit']);
Route::post('admin/products/{id}/update', [ProductController::class, 'update'])->name('admin.products.update');
Route::get('admin/products/{id}/destroy', [ProductController::class, 'destroy'])->name('admin.products.destroy');

//Users
Route::get('admin/users/index', [UserController::class, 'index'])->name('users.index');
Route::get('admin/users/create', [UserController::class, 'create'])->name('users.create');
Route::post('admin/users/store', [UserController::class, 'store'])->name('users.store');
Route::get('admin/users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
Route::put('admin/users/{id}/update', [UserController::class, 'update'])->name('users.update');
Route::delete('admin/users/{id}/destroy', [UserController::class, 'destroy'])->name('users.destroy');

//fe
Route::get('/', [FeController::class, 'index'])->name('index');
Route::get('categories/{id}/products', [FeController::class, 'getProductsByCategoryId'])->name('fe.product.list');
Route::get('products/{id}', [FeController::class, 'productDetail'])->name('fe.products.show');
Route::get('posts/{id}/detail', [FeController::class, 'postDetail'])->name('fe.post.detail');
Route::get('categories/{id}/posts', [FeController::class, 'getPostsByCategoryId'])->name('fe.product.list');
