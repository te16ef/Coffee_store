@extends('layouts.app')

@section('title', 'إدارة المنتجات')

@section('content')
<div class="min-h-screen bg-pink-100 py-10 px-4">
    <div class="max-w-5xl mx-auto bg-white p-6 rounded-xl shadow-lg border border-green-700">
        <h2 class="text-2xl font-bold text-green-800 text-center mb-6">قائمة المنتجات</h2>

        <table class="w-full table-auto border-collapse">
            <thead>
                <tr class="bg-green-800 text-white">
                    <th class="p-3 text-right">الصورة</th>
                    <th class="p-3 text-right">الاسم</th>
                    <th class="p-3 text-right">السعر</th>
                    <th class="p-3 text-right">التحكم</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr class="border-b">
                        <td class="p-3">
                            <img src="{{ asset('images/' . $product->image) }}" alt="{{ $product->name }}" class="w-20 rounded">
                        </td>
                        <td class="p-3">{{ $product->name }}</td>
                        <td class="p-3">{{ $product->price }} ريال</td>
                        <td class="p-3 flex gap-3">
                            <a href="{{ route('admin.products.edit', $product->id) }}"
                               class="bg-yellow-400 hover:bg-yellow-500 text-white px-4 py-1 rounded transition">
                                تعديل
                            </a>

                            <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST" onsubmit="return confirm('هل أنت متأكد من الحذف؟');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-600 hover:bg-red-700 text-white px-4 py-1 rounded transition">
                                    حذف
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="text-center mt-6">
            <a href="{{ route('admin.products.create') }}"
               class="bg-green-800 hover:bg-green-900 text-white px-6 py-2 rounded transition">
                إضافة منتج جديد
            </a>
        </div>
    </div>
</div>
@endsection