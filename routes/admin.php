<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\DiscountController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderItemController;
use App\Http\Controllers\ProductController;
use App\Models\Order_item;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->name('admin.')->group(function () {
    Route::middleware(['guest:admin', 'PreventBackHistory'])->group(function () {
        Route::view('/login', 'admin.pages.login')->name('login');
        Route::post('/login_handler', [AdminController::class, 'loginHandler'])->name('login_handler');
    });
    Route::middleware(['auth:admin', 'PreventBackHistory'])->group(function () {
        Route::get('/home', [AdminController::class, 'index'])->name('home');
        Route::get('/profile', [AdminController::class, 'adminProfile'])->name('profile');
        Route::post('/logout_handler', [AdminController::class, 'logoutHandler'])->name('logout_handler');
        Route::resource('clients', ClientController::class);
        Route::resource('categories', CategoryController::class);
        Route::resource('products', ProductController::class);
        Route::resource('orders', OrderController::class);
        Route::resource('discounts', DiscountController::class);
        Route::resource('order-items', OrderItemController::class);
        Route::get('/profile', [AdminController::class, 'adminProfile'])->name('profile');
        Route::post('/profile-update/{id}', [AdminController::class, 'updateProfile'])->name('profile.update');
        Route::get('/profile/change-password', [AdminController::class, 'changePassword'])->name('profile.change-password');
        Route::post('/profile/update-password/{id}', [AdminController::class, 'updatePassword'])->name('profile.update-password');
    });
});

require __DIR__ . '/auth.php';
