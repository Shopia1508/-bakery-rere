<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/products', function () {
    return view('products');
})->name('products');

Route::get('/location', function () {
    return view('location');
})->name('location');

Route::get('/order', function () {
    return view('order');
})->name('order');
