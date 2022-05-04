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
