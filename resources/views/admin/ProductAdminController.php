<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductAdminController extends Controller
{
    // عرض قائمة المنتجات
    public function index()
    {
        $products = Product::all();
        return view('admin.products.index', compact('products'));
    }

    // عرض صفحة إنشاء منتج
    public function create()
    {
        return view('admin.products.create');
    }

    // حفظ منتج جديد
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'description' => 'required',
            'image' => 'required|image'
        ]);

        $imagePath = $request->file('image')->store('products', 'public');

        Product::create([
            'name'        => $request->name,
            'price'       => $request->price,
            'description' => $request->description,
            'image'       => basename($imagePath),
        ]);

        return redirect()->route('admin.products.index')->with('success', 'تمت إضافة المنتج بنجاح');
    }

    // عرض صفحة التعديل
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('admin.products.edit', compact('product'));
    }

    // تحديث بيانات منتج
    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        $request->validate([
            'name'        => 'required',
            'price'       => 'required|numeric',
            'description' => 'required',
            'image'       => 'nullable|image'
        ]);

        $product->name        = $request->name;
        $product->price       = $request->price;
        $product->description = $request->description;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('products', 'public');
            $product->image = basename($imagePath);
        }

        $product->save();

        return redirect()->route('admin.products.index')->with('success', 'تم تحديث المنتج بنجاح');
    }

    // حذف منتج
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('admin.products.index')->with('success', 'تم حذف المنتج بنجاح');
    }
}