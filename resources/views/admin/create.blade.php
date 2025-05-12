@extends('layouts.app')

@section('title', 'إضافة منتج')

@section('content')
<div class="max-w-xl mx-auto mt-10 p-6 bg-white rounded shadow">
    <h2 class="text-2xl font-bold mb-6 text-center">إضافة منتج جديد</h2>

    @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-4">
            <label class="block mb-1">اسم المنتج</label>
            <input type="text" name="name" class="w-full border px-3 py-2 rounded" required>
        </div>

        <div class="mb-4">
            <label class="block mb-1">الوصف</label>
            <textarea name="description" class="w-full border px-3 py-2 rounded" required></textarea>
        </div>

        <div class="mb-4">
            <label class="block mb-1">السعر</label>
            <input type="number" step="0.01" name="price" class="w-full border px-3 py-2 rounded" required>
        </div>

        <div class="mb-4">
            <label class="block mb-1">الصورة</label>
            <input type="file" name="image" class="w-full border px-3 py-2 rounded" required>
        </div>

        <button type="submit" class="bg-green-600 text-white px-6 py-2 rounded">إضافة</button>
    </form>
</div>
@endsection