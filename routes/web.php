<?php

use App\Http\Controllers\CashierController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/produk', function() {
// 	return view('produk.index');
// })->name('produk_index');

Route::get('/', [CashierController::class, 'index'])->name('produk.index');

Route::get('/cashier', [CashierController::class, 'index_kasir'])->name('produk_kasir');
Route::get('/cashier/create', [CashierController::class, 'create'])->name('cashier.create');
Route::post('/cashier', [CashierController::class, 'store'])->name('cashier.store');
Route::get('/cashier/{id}/edit', [CashierController::class, 'edit'])->name('cashier.edit');
Route::put('/cashier/{id}', [CashierController::class, 'update'])->name('cashier.update');
Route::delete('/cashier/{id}', [CashierController::class, 'destroy'])->name('cashier.destroy');
Route::delete('/cashier', [CashierController::class, 'destroy_all'])->name('cashier.destroy_all');

Route::get('produk/admin', function() {
    return view('produk.admin');
})->name('produk_admin');

Route::get('produk/kostumer', function() {
    return view('produk.customer');
})->name('produk_kostumer');

Route::get('produk/dashboard', function() {
    return view('produk.dashboard');
})->name('produk_dashboard');
