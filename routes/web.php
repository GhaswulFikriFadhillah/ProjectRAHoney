<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderStatusController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RatingController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;

// Auth Routes
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Admin Routes
Route::middleware(['auth'])->group(function () {
    Route::resource('dashboard', AdminController::class);
    Route::resource('products', ProductController::class);
    Route::resource('orders', OrderController::class);
    Route::resource('order-status', OrderStatusController::class);
    Route::resource('ratings', RatingController::class);
});


// Landing Page Routes
Route::prefix('landing')->name('landing.')->group(function () {
    // Halaman utama Landing Page
    Route::get('/', [LandingController::class, 'index'])->name('home.index');

    // Rute untuk produk
    Route::prefix('products')->name('products.')->group(function () {
        Route::get('/', [LandingController::class, 'productIndex'])->name('index'); // Daftar produk
        Route::get('{id}', [LandingController::class, 'productShow'])->name('show'); // Detail produk
    });    

    // Rute untuk pelacakan pesanan
    Route::prefix('orders')->name('orders.')->group(function () {
        Route::get('tracking', [LandingController::class, 'trackOrder'])->name('tracking');
    });

    // Rute untuk memberi rating
    Route::prefix('ratings')->name('ratings.')->group(function () {
        Route::get('create', [RatingController::class, 'create'])->name('create'); // Form pembuatan rating
        Route::post('/', [RatingController::class, 'store'])->name('store');       // Proses penyimpanan rating
    });
});
