<?php

use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\CashierController;
use App\Http\Controllers\KustomerController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/produk', function() {
// 	return view('produk.index');
// })->name('produk_index');

Route::get('/', [CashierController::class, 'index'])->name('produk.index');

// Cashier Routes
Route::get('/cashier', [CashierController::class, 'index_kasir'])->name('produk_kasir');
Route::get('/cashier/create', [CashierController::class, 'create'])->name('cashier.create');
Route::post('/cashier', [CashierController::class, 'store'])->name('cashier.store');
Route::get('/cashier/{id}/edit', [CashierController::class, 'edit'])->name('cashier.edit');
Route::put('/cashier/{id}', [CashierController::class, 'update'])->name('cashier.update');
Route::delete('/cashier/{id}', [CashierController::class, 'destroy'])->name('cashier.destroy');
Route::delete('/cashier', [CashierController::class, 'destroy_all'])->name('cashier.destroy_all');

// Customer Routes
Route::prefix('customer')->group(function() {
    Route::get('/', [KustomerController::class, 'index'])->name('customer.index');
    Route::get('/create', [KustomerController::class, 'create'])->name('customer.create');
    Route::post('/', [KustomerController::class, 'store'])->name('customer.store');
    Route::get('/{id}', [KustomerController::class, 'show'])->name('customer.show');
    Route::get('/{id}/edit', [KustomerController::class, 'edit'])->name('customer.edit');
    Route::put('/{id}', [KustomerController::class, 'update'])->name('customer.update');
    Route::delete('/{id}', [KustomerController::class, 'destroy'])->name('customer.destroy');
    Route::delete('/', [KustomerController::class, 'destroyAll'])->name('customer.destroy_all');
});

// Admin Routes
Route::prefix('admin')->group(function() {
    Route::get('/', [AdminUserController::class, 'index'])->name('admin.index');
    Route::get('/create', [AdminUserController::class, 'create'])->name('admin.create');
    Route::post('/', [AdminUserController::class, 'store'])->name('admin.store');
    Route::get('/{id}', [AdminUserController::class, 'show'])->name('admin.show');
    Route::get('/{id}/edit', [AdminUserController::class, 'edit'])->name('admin.edit');
    Route::put('/{id}', [AdminUserController::class, 'update'])->name('admin.update');
    Route::delete('/{id}', [AdminUserController::class, 'destroy'])->name('admin.destroy');
    Route::delete('/', [AdminUserController::class, 'destroyAll'])->name('admin.destroy_all');
});

// Dashboard Route
Route::get('produk/dashboard', function() {
    return view('produk.dashboard');
})->name('produk_dashboard');
