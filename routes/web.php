<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TokoController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;

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

// Toko
Route::get('/', [TokoController::class, 'home'])->name('home');
Route::get('/keranjang', [TokoController::class, 'keranjang'])->name('keranjang');
Route::get('/keranjang/tambah/{id}', [TokoController::class, 'keranjang_tambah'])->name('keranjang.tambah');
Route::get('/checkout', [TokoController::class, 'checkout'])->name('checkout');

// User
Route::get('/login', [UserController::class, 'login'])->name('login');
Route::post('/postlogin', [UserController::class, 'postlogin'])->name('postlogin');
Route::get('/register', [UserController::class, 'register'])->name('register');
Route::post('/postregister', [UserController::class, 'postregister'])->name('postregister');
Route::get('/logout', [UserController::class, 'logout'])->name('logout');

// Admin
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [TokoController::class, 'dashboard'])->name('dashboard');
});
Route::get('/produk', [AdminController::class, 'produk'])->name('produk');
Route::post('/produk/store', [AdminController::class, 'produk_store'])->name('produk.store');
Route::get('/produk/delete/{id}', [AdminController::class, 'produk_delete'])->name('produk.delete');
Route::post('/produk/update/{id}', [AdminController::class, 'produk_update'])->name('produk.update');



