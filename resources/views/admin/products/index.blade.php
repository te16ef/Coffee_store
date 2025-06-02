@extends('layouts.app')

@section('title', 'منتجاتنا')

@section('content')
<style>
    body {
        background: url('{{ asset('images/coffee-bg.jpg') }}') no-repeat center center fixed;
        background-size: cover;
    }

    .heading-card {
        background-color: rgba(255, 255, 255, 0.8);
        backdrop-filter: blur(4px);
        border-radius: 10px;
        padding: 20px 40px;
        box-shadow: 0 2px 6px rgba(0,0,0,0.1);
        max-width: 400px;
        margin: 30px auto 0;
        text-align: center;
    }

    .heading-card h1 {
        font-size: 1.6rem;
        color: #14532d;
        font-weight: bold;
        margin: 0;
    }

    .product-card {
        background-color: #f5f5dc;
        border-radius: 10px;
        box-shadow: 0 2px 6px rgba(0,0,0,0.1);
        text-align: center;
        transition: transform 0.3s ease;
        padding: 20px;
    }

    .product-card:hover {
        transform: translateY(-5px);
    }

    .product-card img {
        width: 100%;
        height: 200px;
        object-fit: cover;
        border-radius: 8px;
        margin-bottom: 15px;
    }

    .product-card h2 {
        font-size: 1.1rem;
        font-weight: bold;
        color: #333;
        margin-bottom: 10px;
    }

    .product-card p {
        font-size: 1rem;
        color: #14532d;
        font-weight: bold;
        margin-bottom: 15px;
    }

    .glow-button {
        background-color: #14532d;
        color: white;
        padding: 10px 20px;
        border-radius: 6px;
        text-decoration: none;
        display: inline-block;
        font-size: 0.9rem;
        position: relative;
        overflow: hidden;
    }

    .glow-button::before {
        content: '';
        position: absolute;
        top: 0;
        left: -75%;
        width: 50%;
        height: 100%;
        background: rgba(255, 255, 255, 0.3);
        transform: skewX(-25deg);
        animation: shine 2.5s infinite;
    }

    @keyframes shine {
        0% { left: -75%; }
        100% { left: 125%; }
    }

    @media (max-width: 640px) {
        .product-grid {
            grid-template-columns: repeat(2, 1fr);
            padding: 20px 10px;
            gap: 20px;
        }

        .product-card {
            padding: 15px;
        }

        .product-card img {
            height: 160px;
        }

        .product-card p {
            font-size: 0.95rem;
        }
    }
</style>

<div class="min-h-screen">
    <div class="heading-card">
        <h1>منتجاتنا</h1>
    </div>
  <div class="grid grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-4">
    @foreach ($products as $product)
        <div class="bg-white rounded-lg shadow p-4 flex flex-col items-center">
            <img src="{{ asset('images/' . $product->image) }}" alt="{{ $product->name }}" class="h-32 w-full object-cover rounded mb-2">
            <h2 class="text-lg font-bold text-center">{{ $product->name }}</h2>
            <p class="text-gray-600 text-center">{{ $product->description }}</p>
            <p class="text-green-700 font-semibold mt-1">{{ $product->price }} ريال</p>
            <a href="{{ route('products.show', $product->id) }}" class="mt-2 w-full text-center bg-green-700 text-white font-semibold py-1 rounded hover:bg-green-800 transition">عرض التفاصيل</a>
        </div>
    @endforeach
</div>
@endsection