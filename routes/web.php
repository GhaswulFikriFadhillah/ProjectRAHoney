<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderStatusController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RatingController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\AdminController;
use Illuminate\Auth\Middleware\Authenticate;

// Admin Routes
// Route::middleware([Authenticate::class])->group(function(){
    Route::resource('dashboard', AdminController::class);
    Route::resource('products', ProductController::class);
    Route::resource('orders', OrderController::class);
    Route::resource('order-status', OrderStatusController::class);
    Route::resource('ratings', RatingController::class);
// });

// Landing Page Routes
Route::prefix('landing')->name('landing.')->group(function () {
    // Halaman utama Landing Page
    Route::get('/', [LandingController::class, 'index'])->name('home.index');

    // Rute untuk produk
    Route::prefix('products')->name('products.')->group(function () {
        Route::get('/', [LandingController::class, 'productIndex'])->name('index');
        Route::get('{product}', [LandingController::class, 'productShow'])->name('show');
    });

    // Rute untuk pesanan
    Route::prefix('orders')->name('orders.')->group(function () {
        Route::get('track', [LandingController::class, 'trackOrder'])->name('track');
    });

    // Rute untuk memberi rating
    Route::prefix('ratings')->name('ratings.')->group(function () {
        Route::get('create', [LandingController::class, 'createRating'])->name('create');
    });
});

