@extends('layouts.app')

@section('title', 'تعديل المنتج')

@section('content')
<div style="min-height: 100vh; display: flex; justify-content: center; align-items: center; padding: 30px;">
    <div style="background-color: #f8d7da; padding: 30px; border-radius: 12px; width: 100%; max-width: 500px;">
        <h2 style="margin-bottom: 25px; color: #14532d; text-align: center;">تعديل المنتج</h2>
        <form action="{{ route('admin.products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div style="margin-bottom: 15px;">
                <label style="display: block; margin-bottom: 6px;">اسم المنتج</label>
                <input type="text" name="name" value="{{ $product->name }}" required
                       style="width: 100%; padding: 10px; border-radius: 6px; border: 1px solid #ccc;">
            </div>

            <div style="margin-bottom: 15px;">
                <label style="display: block; margin-bottom: 6px;">الوصف</label>
                <textarea name="description" required
                          style="width: 100%; padding: 10px; border-radius: 6px; border: 1px solid #ccc;">{{ $product->description }}</textarea>
            </div>

            <div style="margin-bottom: 15px;">
                <label style="display: block; margin-bottom: 6px;">السعر</label>
                <input type="number" name="price" value="{{ $product->price }}" required
                       style="width: 100%; padding: 10px; border-radius: 6px; border: 1px solid #ccc;">
            </div>

            <div style="margin-bottom: 15px;">
                <label style="display: block; margin-bottom: 6px;">الصورة</label>
                <input type="file" name="image"
                       style="width: 100%; padding: 8px; border-radius: 6px; border: 1px solid #ccc;">
            </div>

            <button type="submit"
                    style="background-color: #14532d; color: white; border: none; padding: 12px 20px; border-radius: 6px; width: 100%;">
                حفظ التعديلات
            </button>
        </form>
    </div>
</div>
@endsection