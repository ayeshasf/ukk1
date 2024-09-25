<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ToyController;
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

Route::get('', [ToyController::class, 'index'])->name('home');

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('admin/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
Route::get('toys', [ToyController::class, 'index'])->name('toys.index');
    Route::get('toys/create', [ToyController::class, 'create'])->name('toys.create');
    Route::post('toys', [ToyController::class, 'store'])->name('toys.store');
    Route::get('toys/{toy}/edit', [ToyController::class, 'edit'])->name('toys.edit');
    Route::put('toys/{toy}', [ToyController::class, 'update'])->name('toys.update');
    Route::delete('toys/{toy}', [ToyController::class, 'destroy'])->name('toys.destroy');
     Route::post('/logout', [LoginController::class, 'logout'])->name('logout');





