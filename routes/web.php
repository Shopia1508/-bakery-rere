<?php

use App\Http\Controllers\ControllerOrder;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController; // <-- WAJIB DITAMBAH
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
    return view('about');
})->name('about');

// ORDER
Route::get('/order', [ControllerOrder::class, 'create'])->name('order');
Route::post('/order', [ControllerOrder::class, 'store'])->name('order');
Route::post('/order/create-form-cart', [ControllerOrder::class,'createFormCart'])->name('order.createFromCart');

// ADMIN LOGIN
Route::get('/admin-login', [LoginController::class, 'showAdminLogin'])->name('admin.login');
Route::post('/admin-login', [LoginController::class, 'adminLogin'])->name('admin.login.submit');

// ADMIN DASHBOARD
Route::get('/admin/index', function () {
    return view('admin.index');
})->name('admin.index');

// ADMIN MENUS PAGE
Route::get('/admin/menus', [AdminController::class, 'menus'])->name('admin.menus');
