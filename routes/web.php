<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ToyController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\Auth\LoginController;


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



Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('', [LoginController::class, 'showLoginForm'])->name('login');

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('admin/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
Route::get('toys', [ToyController::class, 'index'])->name('toys.index');
    Route::get('toys/create', [ToyController::class, 'create'])->name('toys.create');
    Route::post('toys', [ToyController::class, 'store'])->name('toys.store');
    Route::get('toys/{toy}/edit', [ToyController::class, 'edit'])->name('toys.edit');
    Route::put('toys/{toy}', [ToyController::class, 'update'])->name('toys.update');
    Route::delete('/admin/toys/{id}', [AdminController::class, 'destroy'])->name('admin.destroy');
    Route::get('admin', [AdminController::class, 'index'])->name('admin.index');

    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

     Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
     Route::get('/checkout', [CartController::class, 'checkout'])->name('checkout');

     Route::post('/cart/add', [CartController::class, 'add'])->name('cart.add');
     Route::delete('/cart/remove/{id}', [CartController::class, 'remove'])->name('cart.remove');





