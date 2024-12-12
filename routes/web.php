<?

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\AdminController;

Route::get('/', [ProductController::class, 'index'])->name('products.index');
Route::get('/track-order', [OrderController::class, 'showTrackingForm'])->name('orders.track.form');
Route::post('/track-order', [OrderController::class, 'trackOrder'])->name('orders.track');
Route::post('/feedback/{order}', [OrderController::class, 'submitFeedback'])->name('orders.feedback');
Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/products', [AdminController::class, 'listProducts'])->name('admin.products');
    Route::post('/products', [AdminController::class, 'storeProduct'])->name('admin.products.store');
    Route::put('/products/{product}', [AdminController::class, 'updateProduct'])->name('admin.products.update');
    Route::delete('/products/{product}', [AdminController::class, 'deleteProduct'])->name('admin.products.delete');
    Route::put('/orders/{order}', [AdminController::class, 'updateOrderStatus'])->name('admin.orders.update');
});