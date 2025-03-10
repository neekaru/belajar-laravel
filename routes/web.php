<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/produk', function() {
	return view('produk.index');
})->name('produk_index');

Route::get('produk/admin', function() {
    return view('produk.admin');
})->name('produk_admin');

Route::get('produk/kostumer', function() {
    return view('produk.customer');
})->name('produk_kostumer');

Route::get('produk/cashier', function() {
    return view('produk.cashier');
})->name('produk_kasir');

Route::get('produk/dashboard', function() {
    return view('produk.dashboard');
})->name('produk_dashboard');