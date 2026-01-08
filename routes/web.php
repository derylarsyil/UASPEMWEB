<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\OrderController;

/*
|--------------------------------------------------------------------------
| AUTH
|--------------------------------------------------------------------------
*/
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate']);

Route::get('/register', [AuthController::class, 'register']);
Route::post('/register', [AuthController::class, 'store']);

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

/*
|--------------------------------------------------------------------------
| USER (LOGIN WAJIB)
|--------------------------------------------------------------------------
*/
Route::middleware('auth')->group(function () {

    // PAGE USER
    Route::get('/', [PageController::class, 'home']);
    Route::get('/home', [PageController::class, 'home']);
    Route::get('/about', [PageController::class, 'about']);
    Route::get('/product', [PageController::class, 'product']);
    Route::get('/contact', [PageController::class, 'contact']);

    // CART
    Route::post('/cart/add/{product}', [CartController::class, 'add']);
    Route::get('/cart', [CartController::class, 'index']);

    // CHECKOUT
    Route::get('/checkout', [CheckoutController::class, 'checkout']);
    Route::post('/checkout', [CheckoutController::class, 'process']);
});

/*
|--------------------------------------------------------------------------
| ADMIN (LOGIN + ROLE ADMIN)
|--------------------------------------------------------------------------
*/
Route::middleware(['auth', 'isadmin'])
    ->prefix('admin')
    ->group(function () {

        // DASHBOARD
        Route::get('/dashboard', function () {
            return view('admin.dashboard');
        });

        // PRODUCT CRUD
        Route::get('/product', [ProductController::class, 'index']);
        Route::get('/product/create', [ProductController::class, 'create']);
        Route::post('/product', [ProductController::class, 'store']);
        Route::get('/product/{product}/edit', [ProductController::class, 'edit']);
        Route::put('/product/{product}', [ProductController::class, 'update']);
        Route::delete('/product/{product}', [ProductController::class, 'destroy']);

        // ORDER (PESANAN MASUK)
        Route::get('/orders', [OrderController::class, 'index']);
        Route::delete('/orders/{order}', [OrderController::class, 'destroy']);
        Route::get('/orders/export', [OrderController::class, 'export']);

});
