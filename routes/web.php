<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Admin\ProductAdminController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

// عرض كل المنتجات
Route::get('/products', [ProductController::class, 'index'])->name('products.index');

// عرض تفاصيل منتج واحد
Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');

// عرض سلة المشتريات
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');

// إضافة منتج للسلة
Route::post('/cart/add/{id}', [CartController::class, 'add'])->name('cart.add');

// إزالة منتج من السلة
Route::delete('/cart/remove/{id}', [CartController::class, 'remove'])->name('cart.remove');

// صفحة من نحن
Route::get('/about', function () {
    return view('about');
})->name('about');

// صفحة تواصل معنا
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// سياسة الخصوصية
Route::get('/privacy', function () {
    return view('privacy');
})->name('privacy');

// تواصل معنا (POST)
Route::post('/contact/send', [ContactController::class, 'send'])->name('contact.send');

// لوحة التحكم - إنشاء منتج
Route::get('/admin/products/create', [ProductAdminController::class, 'create'])->name('admin.products.create');

// لوحة التحكم - حفظ منتج
Route::post('/admin/products', [ProductAdminController::class, 'store'])->name('admin.products.store');