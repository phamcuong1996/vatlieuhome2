<?php

use App\Http\Controllers\AdminOrderController;
use App\Http\Controllers\FeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\bannerController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\CategoryController;
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
Route::get('admin/products/{id}/edit', [ProductController::class, 'edit'])->name('admin.products.edit');
Route::post('admin/products/{id}/update', [ProductController::class, 'update'])->name('admin.products.update');
Route::get('admin/products/{id}/destroy', [ProductController::class, 'destroy'])->name('admin.products.destroy');

//Post
Route::get('admin/posts/index', [PostController::class, 'index'])->name('admin.posts.index');
Route::get('admin/posts/create', [PostController::class, 'create'])->name('admin.posts.create');
Route::post('admin/posts/store', [PostController::class, 'store'])->name('admin.posts.store');
Route::get('admin/posts/{id}/edit', [PostController::class, 'edit'])->name('admin.posts.edit');
Route::post('admin/posts/{id}/update', [PostController::class, 'update'])->name('admin.posts.update');
Route::get('admin/posts/{id}/destroy', [PostController::class, 'destroy'])->name('admin.posts.destroy');

//Users
Route::get('admin/users/index', [UserController::class, 'index'])->name('admin.users.index');
Route::get('admin/users/create', [UserController::class, 'create'])->name('admin.users.create');
Route::post('admin/users/store', [UserController::class, 'store'])->name('admin.users.store');
Route::get('admin/users/{id}/edit', [UserController::class, 'edit'])->name('admin.users.edit');
Route::put('admin/users/{id}/update', [UserController::class, 'update'])->name('admin.users.update');
Route::delete('admin/users/{id}/destroy', [UserController::class, 'destroy'])->name('admin.users.destroy');

//fe
Route::get('/', [FeController::class, 'index'])->name('index');
Route::get('products/{id}', [FeController::class, 'productDetail'])->name('fe.products.show');
Route::get('categories/{id}/products', [FeController::class, 'getProductsByCategoryId'])->name('fe.product.list');
Route::get('posts/{id}/detail', [FeController::class, 'postDetail'])->name('fe.post.detail');
Route::get('categories/{id}/posts', [FeController::class, 'getPostsByCategoryId'])->name('fe.products.list');

// Cart
Route::post('orders', [OrderController::class, 'addProduct'])->name('fe.orders.add_product');
Route::get('carts/index', [OrderController::class, 'index'])->name('carts.index');
Route::get('/updatecart', [OrderController::class, 'updatecart'])->name('carts.update');
Route::get('/deletecart', [OrderController::class, 'deletecart'])->name('carts.delete');
Route::post('orders/save', [OrderController::class, 'save'])->name('orders.save');
Route::get('/select-delivery', [OrderController::class, 'selectDelivery'])->name('getDistrictByProvinceId');

// AdminOrder

Route::get('admin/orders/index', [AdminOrderController::class, 'indexAll'])->name('admin.orders.index');
Route::get('admin/orders/init', [AdminOrderController::class, 'indexInit'])->name('admin.orders.indexInit');
Route::get('admin/orders/confirmed', [AdminOrderController::class, 'indexConfirmed'])->name('admin.orders.indexConfirmed');
Route::get('admin/orders/done', [AdminOrderController::class, 'indexDone'])->name('admin.orders.indexDone');
Route::get('admin/orders/cancel', [AdminOrderController::class, 'indexCancel'])->name('admin.orders.indexCancel');

Route::get('admin/orders/{id}/show', [AdminOrderController::class, 'show'])->name('admin.orders.show');
Route::get('admin/orders/{id}/edit', [AdminOrderController::class, 'editOrder'])->name('admin.orders.edit');

Route::post('admin/orders/{id}/confirmed', [AdminOrderController::class, 'confirmed'])->name('orders.confirmed');
Route::post('admin/orders/{id}/done', [AdminOrderController::class, 'done'])->name('orders.done');
Route::post('admin/orders/{id}/cancel', [AdminOrderController::class, 'cancel'])->name('orders.cancel');

Route::put('admin/orders/{id}/update', [AdminOrderController::class, 'update'])->name('admin.orders.update');
Route::get('admin/orders/create', [AdminOrderController::class, 'createOrder'])->name('admin.orders.create');
Route::post('admin/orders/store', [AdminOrderController::class, 'storeOrder'])->name('admin.orders.store');
Route::get('admin/orders/{id}/destroy', [AdminOrderController::class, 'destroy'])->name('admin.orders.destroy');

Route::get('/accept/{order}/{token}', [OrderController::class, 'accept'])->name('admin.orders.accept');
Route::get('/active/{user}/{token}', [AuthController::class, 'active'])->name('admin.user.active');

//Auth
Route::get('register', [AuthController::class, 'showFormRegister'])->name('show-form-register');
Route::post('register', [AuthController::class, 'register'])->name('register');

Route::get('login', [AuthController::class, 'showFormLogin'])->name('show-form-login');
Route::post('login', [AuthController::class, 'login'])->name('login');

Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::get('profile', [AuthController::class, 'showProfile'])->name('show-profile');
Route::put('profile', [AuthController::class, 'Profile'])->name('profile');

Route::get('/forget-password', [AuthController::class, 'forgetPass'])->name('forget_pass');
Route::post('/forget-password', [AuthController::class, 'postForgetPass']);

//Banner
Route::get('admin/banners/index', [BannerController::class, 'index'])->name('admin.banners.index');
Route::get('admin/banners/create', [BannerController::class, 'create'])->name('admin.banners.create');
Route::post('admin/banners/store', [BannerController::class, 'store'])->name('admin.banners.store');
Route::get('admin/banners/{id}/edit', [BannerController::class, 'edit'])->name('admin.banners.edit');
Route::post('admin/banners/{id}/update', [BannerController::class, 'update'])->name('admin.banners.update');
Route::get('admin/banners/{id}/destroy', [BannerController::class, 'destroy'])->name('admin.banners.destroy');

//mail
Route::get('mail', [MailController::class, 'testMail'])->name('')->name('mail');

//Category
Route::get('admin/categories/index', [CategoryController::class, 'index'])->name('admin.categories.index');
Route::get('admin/categories/create', [CategoryController::class, 'create'])->name('admin.categories.create');
Route::post('admin/categories/store', [CategoryController::class, 'store'])->name('admin.categories.store');
Route::get('admin/categories/{id}/edit', [CategoryController::class, 'edit'])->name('admin.categories.edit');
Route::put('admin/categories/{id}/update', [CategoryController::class, 'update'])->name('admin.categories.update');
Route::get('admin/categories/{id}/destroy', [CategoryController::class, 'destroy'])->name('admin.categories.destroy');
