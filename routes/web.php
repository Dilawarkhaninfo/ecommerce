<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/cart', function () {
    return view('cart');
})->name('cart');

Route::get('/detail', function () {
    return view('detail');
})->name('detail');

Route::get('/shop', function () {
    return view('shop');
})->name('shop');

Route::get('/checkout', function () {
    return view('checkout');
})->name('checkout');
