<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Admin\ProductAdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// الخطوة 1: توجيه المستخدم مباشرة إلى صفحة "من نحن"
Route::get('/', function () {
    return redirect()->route('about');
})->name('home');

// الخطوة 2: صفحة "من نحن"
Route::get('/about', function () {
    return view('about');
})->name('about');

// الخطوة 3: الصفحة الرئيسية - فيها زر "ابدأ التذوق"
Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

// الخطوة 4: صفحة المنتجات
Route::get('/products', [ProductController::class, 'index'])->name('products.index');

// الخطوة 5: تفاصيل منتج
Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');

// الخطوة 6: سلة المشتريات
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::post('/cart/add/{id}', [CartController::class, 'add'])->name('cart.add');
Route::delete('/cart/remove/{id}', [CartController::class, 'remove'])->name('cart.remove');

// الخطوة 7: الدفع
Route::get('/checkout', function () {
    return view('checkout');
})->name('checkout');

// صفحة تواصل معنا
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
Route::post('/contact/send', [ContactController::class, 'send'])->name('contact.send');

// سياسة الخصوصية
Route::get('/privacy', function () {
    return view('privacy');
})->name('privacy');

// لوحة تحكم المنتجات
Route::get('/admin/products/create', [ProductAdminController::class, 'create'])->name('admin.products.create');
Route::post('/admin/products', [ProductAdminController::class, 'store'])->name('admin.products.store');

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

Route::get('/admin/products', [ProductAdminController::class, 'index'])->name('admin.products.index');
Route::get('/admin/products/create', [ProductAdminController::class, 'create'])->name('admin.products.create');
Route::post('/admin/products', [ProductAdminController::class, 'store'])->name('admin.products.store');
Route::get('/admin/products/{id}/edit', [ProductAdminController::class, 'edit'])->name('admin.products.edit');
Route::put('/admin/products/{id}', [ProductAdminController::class, 'update'])->name('admin.products.update');
Route::delete('/admin/products/{id}', [ProductAdminController::class, 'destroy'])->name('admin.products.destroy');