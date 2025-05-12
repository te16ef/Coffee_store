@extends('layouts.app')

@section('title', 'إضافة منتج')

@section('content')
<div style="min-height: 100vh; background-color: #f8d7da; display: flex; justify-content: center; align-items: center;">
    <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data" style="background-color: white; padding: 30px; border-radius: 15px; width: 100%; max-width: 450px; box-shadow: 0 4px 12px rgba(0,0,0,0.1);">
        @csrf
        <h2 style="text-align: center; color: #d63384; margin-bottom: 25px;">إضافة منتج جديد</h2>

        <div style="margin-bottom: 15px;">
            <label for="name" style="display: block; margin-bottom: 5px; font-weight: bold;">الاسم</label>
            <input type="text" name="name" id="name" required style="width: 100%; padding: 10px; border-radius: 8px; border: 1px solid #ccc;">
        </div>

        <div style="margin-bottom: 15px;">
            <label for="description" style="display: block; margin-bottom: 5px; font-weight: bold;">الوصف</label>
            <textarea name="description" id="description" rows="3" required style="width: 100%; padding: 10px; border-radius: 8px; border: 1px solid #ccc;"></textarea>
        </div>

        <div style="margin-bottom: 15px;">
            <label for="price" style="display: block; margin-bottom: 5px; font-weight: bold;">السعر</label>
            <input type="number" name="price" id="price" required style="width: 100%; padding: 10px; border-radius: 8px; border: 1px solid #ccc;">
        </div>

        <div style="margin-bottom: 20px;">
            <label for="image" style="display: block; margin-bottom: 5px; font-weight: bold;">الصورة</label>
            <input type="file" name="image" id="image" required style="width: 100%; padding: 10px; border-radius: 8px;">
        </div>

        <button type="submit" style="width: 100%; padding: 12px; background-color: #d63384; color: white; border: none; border-radius: 8px; font-weight: bold;">إضافة</button>
    </form>
</div>
@endsection