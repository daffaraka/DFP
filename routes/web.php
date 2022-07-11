<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\MidTransController;
use App\Http\Controllers\ProductController;
use App\Models\Product;
use App\Services\Midtrans\Midtrans;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;




Route::get('/', function () {
    return view('user.index');
});

// Homepage
Route::view('/index', 'user/index')->name('index');
Route::get('/shop', [ProductController::class,'shop'])->name('shop');
Route::view('/login', 'user/login')->name('login');

// Admin
Route::middleware(['auth'])->group(function () {
    Route::view('/admin','admin/layout-admin')->name('admin.home');
    Route::get('/admin/product',[ProductController::class,'product'])->name('admin.product');
    Route::get('/admin/product-tambah/',[ProductController::class,'create'])->name('admin.product-tambah');
    Route::post('/admin/product-masukkan/',[ProductController::class,'store'])->name('admin.product-store');
    Route::view('/admin/product-edit/','admin/product-edit')->name('admin.product-edit');
    Route::get('/admin/product-hapus/{id}',[ProductController::class,'destroy'])->name('admin.product-hapus');
    Route::view('/admin/pembelian','admin/pembelian')->name('admin.pembelian');
    Route::view('/admin/pembelian-detail','admin/pembelian-detail')->name('admin.pembelian-detail');
    Route::get('/admin/pelanggan',[AdminController::class,'userList'])->name('admin.pelanggan');
    Route::get('/shop/cart',[CartController::class,'cartList'])->name('cart.cartList');
    Route::post('/shop/add-to-cart/{id_produk}',[CartController::class,'addToCart'])->name('cart.add-to-cart');
    Route::get('/shop/payment/{id_transaksi}', [CartController::class,'getPembayaran'])->name('cart.getPembayaran');
    Route::get('/shop/payment/{id_transaksi}/pay-now', [CartController::class,'payNow'])->name('cart.payNow');
    Route::get('getSnapToken', [CartController::class,'getSnapToken'])->name('cart.getSnapToken');
    Route::get('/shop/payment/transaksi/success',[MidTransController::class,'finishRedirect'])->name('notif.success');
    Route::get('/shop/payment/transaksi/failed', [MidTransController::class,'failedRedirect'])->name('notif.failed');
    Route::get('/shop/payment/transaksi/pending', [MidTransController::class,'unfinishedRedirect'])->name('notif.pending');

    Route::get('/delete-cart/{id}', [CartController::class,'destroy'])->name('cart.hapus');


});



//Product & cart
Route::get('/shop/show-product/{id}', [ProductController::class,'show'])->name('shop.show-product');
Route::match(['get', 'post'], '/user/profile', function () {
    
});




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
