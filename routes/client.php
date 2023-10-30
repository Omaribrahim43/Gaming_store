<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PaypalController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'indexPage'])->name('home');

Route::get('/store', [HomeController::class, 'storePage'])->name('store');
Route::get('/store/single/{id}', [HomeController::class, 'singlePage'])->name('store.single');
Route::get('/store/category/{id}', [HomeController::class, 'categoryPage'])->name('store.category');

Route::get('/store/cart', [HomeController::class, 'cartPage'])->name('store.cart');
Route::get('/store/add-to-cart/{product_id}', [HomeController::class, 'addToCart'])->name('store.add-to-cart');
Route::get('qty-increment/{rowId}', [HomeController::class, 'qtyIncrement'])->name('qty-increment');
Route::get('qty-decrement/{rowId}', [HomeController::class, 'qtyDecrement'])->name('qty-decrement');
Route::get('remove-product/{rowId}', [HomeController::class, 'removeProduct'])->name('remove-product');

Route::middleware('auth')->group(function () {
    Route::post('/logout_handler', [HomeController::class, 'logoutHandler'])->name('logout_handler');
    Route::get('/profile', [HomeController::class, 'profilePage'])->name('profile');
    Route::put('/profile-update/{id}', [HomeController::class, 'profileUpdate'])->name('profile-update');
    Route::get('/change-password', [HomeController::class, 'changePasswordPage'])->name('change-password');
    Route::post('/update-password/{id}', [HomeController::class, 'updatePassword'])->name('update-password');
    Route::get('/user-orders', [HomeController::class, 'userOrders'])->name('user-orders');

    Route::post('/place-order', [PaypalController::class, 'buyProduct'])->name('place-order');
    Route::get('/store/checkout', [HomeController::class, 'checkoutPage'])->name('store.checkout');
    Route::get('paypal/success', [PaypalController::class, 'success'])->name('paypal_success');
    Route::get('paypal/cancel', [PaypalController::class, 'cancel'])->name('paypal_cancel');
});
