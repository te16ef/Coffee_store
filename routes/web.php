<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Admin\ProductAdminController;

// إعادة توجيه المستخدم مباشرة إلى صفحة "من نحن"
Route::get('/', function () {
    return redirect()->route('about');
})->name('home');

// صفحات عامة
Route::get('/about', fn() => view('about'))->name('about');
Route::get('/welcome', fn() => view('welcome'))->name('welcome');
Route::get('/contact', fn() => view('contact'))->name('contact');
Route::get('/privacy', fn() => view('privacy'))->name('privacy');
Route::get('/checkout', fn() => view('checkout'))->name('checkout');
Route::post('/contact/send', [ContactController::class, 'send'])->name('contact.send');

// المنتجات (المستخدم)
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');

// السلة
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::post('/cart/add/{id}', [CartController::class, 'add'])->name('cart.add');
Route::delete('/cart/remove/{id}', [CartController::class, 'remove'])->name('cart.remove');

// لوحة تحكم الأدمن (منتجات)
Route::prefix('admin/products')->name('admin.products.')->controller(ProductAdminController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::post('/', 'store')->name('store');
    Route::get('/{id}/edit', 'edit')->name('edit');
    Route::put('/{id}', 'update')->name('update');
    Route::delete('/{id}', 'destroy')->name('destroy');
});
// صفحة الاتصال
Route::view('/contact', 'contact')->name('contact'); // يعرض صفحة التواصل
Route::post('/contact/send', [ContactController::class, 'send'])->name('contact.send'); // يرسل الرسالة
