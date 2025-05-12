@extends('layouts.app')

@section('title', 'تعديل منتج')

@section('content')
<div class="flex items-center justify-center min-h-screen bg-pink-100 py-10">
    <div class="bg-white rounded-xl shadow-lg p-8 w-full max-w-md border border-green-700">
        <h2 class="text-center text-2xl font-bold text-green-800 mb-6">تعديل المنتج</h2>

        @if ($errors->any())
            <div class="bg-red-100 text-red-700 p-4 rounded mb-4 text-sm">
                <ul class="list-disc pr-4">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.products.update', $product->id) }}" method="POST" enctype="multipart/form-data" class="space-y-4">
            @csrf
            @method('PUT')

            <div>
                <label class="block text-sm text-gray-700 mb-1">اسم المنتج</label>
                <input type="text" name="name" value="{{ $product->name }}" class="w-full border rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-800">
            </div>

            <div>
                <label class="block text-sm text-gray-700 mb-1">الوصف</label>
                <textarea name="description" rows="3" class="w-full border rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-800">{{ $product->description }}</textarea>
            </div>

            <div>
                <label class="block text-sm text-gray-700 mb-1">السعر</label>
                <input type="text" name="price" value="{{ $product->price }}" class="w-full border rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-800">
            </div>

            <div>
                <label class="block text-sm text-gray-700 mb-1">الصورة الحالية</label>
                <img src="{{ asset('images/' . $product->image) }}" class="w-40 mb-3 rounded shadow">
                <input type="file" name="image" class="w-full border rounded px-3 py-2 bg-white">
            </div>

            <div class="text-center mt-6">
                <button type="submit" class="bg-green-800 text-white px-6 py-2 rounded hover:bg-green-900 transition">تحديث</button>
            </div>
        </form>
    </div>
</div>
@endsection