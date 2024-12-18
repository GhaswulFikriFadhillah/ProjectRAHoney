<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderStatusController;
use App\Http\Controllers\RatingController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LandingpageController;

Route::resource('landingpage', LandingpageController::class);
Route::resource('dashboard', DashboardController::class);
//Admin Route
Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {

    Route::resource('products', ProductController::class);
    Route::resource('orders', OrderController::class);
    Route::resource('orderstatus', OrderStatusController::class);
    Route::resource('ratings', RatingController::class);
});

//Landingpage Route
Route::prefix('landingpage')->group(function () {
    Route::resource('products', ProductController::class)->only(['index', 'show']);
    Route::resource('ratings', RatingController::class)->only(['create', 'store']);
});


