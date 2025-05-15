<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;

class ProductAdminController extends Controller
{
    // عرض نموذج إنشاء منتج جديد
    public function create()
    {
      
        return view('admin.products.create');
    }

    // حفظ المنتج في قاعدة البيانات
    public function store(Request $request)
    {
       
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
            'image' => 'required|image|mimes:jpeg,png,jpg,pdf,gif',
        ]);

        $image=$request->file('image');
          // تخزين الملف في ال storage 
       $path= $image->store('images','public');

        Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
             'image'=>Storage::url($path),
        ]);

        return redirect()->route('products.index')->with('success', 'تمت إضافة المنتج بنجاح');
    }
}