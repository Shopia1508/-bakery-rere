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

Route::get('/order', function () {
    return view('order');
})->name('order');

Route::get('/about', function () {
    return view ('about');
})->name('about');


Route::get('/order', [ControllerOrder::class, 'create'])->name('order'); // Form input
Route::post('/order', [ControllerOrder::class, 'store'])->name('order.store'); // Simpan data

// Halaman tersembunyi (data harian)
Route::get('/dataharian', [OrderController::class, 'index'])->name('dataharian');
Route::get('/dataharian/{id}/edit', [OrderController::class, 'edit'])->name('dataharian.edit');
Route::put('/dataharian/{id}', [OrderController::class, 'update'])->name('dataharian.update');
Route::delete('/dataharian/{id}', [OrderController::class, 'destroy'])->name('dataharian.destroy');

