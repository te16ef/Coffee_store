@extends('layouts.app')

@section('title', 'لوحة التحكم - المنتجات')

@section('content')
<div class="container mx-auto py-10">
    <h2 class="text-2xl font-bold mb-6 text-center text-green-900">إدارة المنتجات</h2>

    @if (session('success'))
        <div class="bg-green-100 text-green-800 p-4 rounded mb-4 text-center shadow">
            {{ session('success') }}
        </div>
    @endif

    <div class="text-right mb-4">
        <a href="{{ route('admin.products.create') }}" class="bg-pink-500 hover:bg-pink-600 text-white font-semibold py-2 px-4 rounded shadow">
            + إضافة منتج جديد
        </a>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach ($products as $product)
            <div class="bg-white rounded-lg shadow p-4 text-center">
                <img src="{{ asset('images/' . $product->image) }}" alt="{{ $product->name }}" class="w-full h-40 object-cover rounded mb-3">
                <h3 class="text-lg font-semibold text-green-900 mb-1">{{ $product->name }}</h3>
                <p class="text-gray-600 text-sm mb-2">{{ $product->description }}</p>
                <p class="text-pink-600 font-bold mb-2">{{ $product->price }} ريال</p>

                <div class="flex justify-center space-x-2 rtl:space-x-reverse">
                    <a href="{{ route('admin.products.edit', $product->id) }}" class="bg-yellow-400 hover:bg-yellow-500 text-white px-3 py-1 rounded">تعديل</a>
                    <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST" onsubmit="return confirm('هل أنت متأكد من حذف المنتج؟')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded">حذف</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection