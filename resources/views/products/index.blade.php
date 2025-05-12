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
    <!-- بطاقة عنوان "منتجاتنا" -->
    <div class="heading-card">
        <h1>منتجاتنا</h1>
    </div>

    <!-- شبكة المنتجات -->
    <div class="product-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 30px; padding: 40px 20px;">
        @foreach ($products as $product)
            <div class="product-card">
                <img src="{{ asset('images/' . $product->image) }}" alt="{{ $product->name }}">
                <h3>{{ $product->name }}</h3>
                <p>{{ $product->price }} ريال</p>
                <a href="{{ route('products.show', $product->id) }}" class="glow-button">عرض التفاصيل</a>
            </div>
        @endforeach
    </div>
</div>
@endsection