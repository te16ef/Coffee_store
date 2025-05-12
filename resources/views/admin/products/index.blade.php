@extends('layouts.app')

@section('title', 'إدارة المنتجات')

@section('content')
<div class="max-w-4xl mx-auto p-6 bg-white shadow rounded-lg mt-10">
    <h2 class="text-xl font-bold text-green-900 mb-6">جميع المنتجات</h2>

    @if(session('success'))
        <div class="bg-green-100 text-green-800 p-4 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <table class="w-full border border-gray-300 text-right">
        <thead class="bg-pink-100 text-green-900">
            <tr>
                <th class="p-2">الصورة</th>
                <th class="p-2">الاسم</th>
                <th class="p-2">السعر</th>
                <th class="p-2">الخيارات</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
                <tr class="border-t">
                    <td class="p-2">
                        <img src="{{ asset('images/' . $product->image) }}" alt="{{ $product->name }}" class="w-20 h-20 object-cover rounded">
                    </td>
                    <td class="p-2">{{ $product->name }}</td>
                    <td class="p-2">{{ $product->price }} ريال</td>
                    <td class="p-2">
                        <!-- زر تعديل (لاحقًا نفعّل التعديل) -->
                        <a href="#" class="text-blue-600 hover:underline mr-2">تعديل</a>

                        <!-- زر حذف -->
                        <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button onclick="return confirm('هل أنت متأكد من الحذف؟')" class="text-red-600 hover:underline">حذف</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection