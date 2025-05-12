@extends('layouts.app')

@section('title', 'عرض المنتجات')

@section('content')
<div style="min-height: 100vh; padding: 40px 20px;">
    <h2 style="font-size: 1.5rem; color: #14532d; text-align: center; margin-bottom: 30px;">كل المنتجات</h2>

    <div style="display: flex; flex-wrap: wrap; gap: 20px; justify-content: center;">
        @foreach($products as $product)
            <div style="background-color: #f8d7da; border-radius: 8px; padding: 15px; width: 280px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); text-align: center;">
                <img src="{{ $product->image ? asset('images/' . $product->image) : asset('images/beige-bg.jpg') }}"
                     alt="{{ $product->name }}"
                     style="width: 100%; height: 200px; object-fit: cover; border-radius: 6px; margin-bottom: 10px;">

                <h3 style="margin-bottom: 5px;">{{ $product->name }}</h3>
                <p style="margin-bottom: 5px;">السعر: {{ $product->price }} ريال</p>

                <a href="{{ route('admin.products.edit', $product->id) }}"
                   style="display: inline-block; background-color: #14532d; color: white; padding: 6px 12px; border-radius: 6px; margin-top: 10px;">تعديل</a>

                <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit"
                            onclick="return confirm('هل أنت متأكد من حذف المنتج؟');"
                            style="background-color: #d63384; color: white; padding: 6px 12px; border: none; border-radius: 6px;">حذف</button>
                </form>
            </div>
        @endforeach
    </div>
</div>
@endsection


