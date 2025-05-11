<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    // عرض كل المنتجات
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    // عرض تفاصيل منتج واحد
    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('products.show', compact('product'));
    }
}