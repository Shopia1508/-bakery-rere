<?php

use App\Http\Controllers\ControllerOrder;
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



Route::get('/about', function () {
    return view ('about');
})->name('about');


Route::get('/order', [ControllerOrder::class, 'create'])->name('order'); // Form input
Route::post('/order', [ControllerOrder::class, 'store'])->name('order'); // Simpan data
Route::post('/order/create-form-cart', [ControllerOrder::class,'createFormCart'])->name('order.createFromCart');

// Halaman tersembunyi (data harian)
Route::get('/index', [ControllerOrder::class, 'index'])->name('index');
Route::get('/index/{id}/edit', [ControllerOrder::class, 'edit'])->name('index.edit');
Route::put('/index/{id}', [ControllerOrder::class, 'update'])->name('index.update');
Route::delete('/index/{id}', [ControllerOrder::class, 'destroy'])->name('index.destroy');



