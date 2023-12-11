<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LaptopController;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('pages.index');
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/service', function () {
    return view('pages.service');
});

Route::get('/products', function () {
    return view('pages.products');
});

Route::get('/admin', function () {
    return view('layouts.index');
});

Route::resource('contacts', ContactController::class);
Route::get('/contact', [ContactController::class, 'index']);
Route::post('/contact', [ContactController::class, 'store']);
Route::get('/admin/contacts', [ContactController::class, 'show']) -> name('contacts');
Route::get('/edit', [ContactController::class, 'edit']);

Route::resource('laptops', LaptopController::class);
Route::get('/admin/laptops', [LaptopController::class, 'index'])->name('laptops');
Route::get('/form', [LaptopController::class, 'create']);
Route::post('/form', [LaptopController::class, 'store']);
Route::get('/edit1', [LaptopController::class, 'edit']);

Route::resource('products', ProductController::class);
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('/products', [ProductController::class, 'store'])->name('products.store');
Route::get('/admin/products', [ProductController::class, 'admin'])->name('products');
Route::get('/edit2', [ProductController::class, 'edit']);
