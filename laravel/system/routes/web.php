<?php

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
    return view('fontend.home');
});

Route::get('home', function () {
    return view('fontend.home');
});

Route::get('product', function () {
    return view('fontend.product');
});

Route::get('about', function () {
    return view('fontend.about');
});

Route::get('login', function () {
    return view('login');
});

Route::get('template', function () {
    return view('template.base');
});


Route::get('beranda', function () {
    return view('admin.beranda');
});


Route::get('kategori', function () {
    return view('admin.kategori');
});


Route::get('pelanggan', function () {
    return view('admin.pelanggan');
});


Route::get('produk', function () {
    return view('admin.produk');
});



Route::get('promo', function () {
    return view('admin.promo');
});



Route::get('suppliyer', function () {
    return view('admin.suppliyer');
});