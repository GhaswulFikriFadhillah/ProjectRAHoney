<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderStatusController;
use App\Http\Controllers\RatingController;
use App\Http\Controllers\DashboardController;

Route::resource('dashboard', DashboardController::class);
Route::resource('products', ProductController::class);
Route::resource('orders', OrderController::class);
Route::resource('order-status', OrderStatusController::class);
Route::resource('ratings', RatingController::class);

