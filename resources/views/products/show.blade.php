@extends('layouts.app')

@section('title', $product->name)

@section('content')
<style>
    body {
        background: url('{{ asset('images/coffee-bg.jpg') }}') no-repeat center center fixed;
        background-size: cover;
        font-family: 'Amiri', serif;
    }

    .card-container {
        min-height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 30px;
        position: relative;
        flex-wrap: wrap;
    }

    .card {
        background-color: rgba(255, 255, 255, 0.6);
        padding: 8px;
        border-radius: 12px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        text-align: center;
        width: 150%;
        max-width: 360px;
        backdrop-filter: blur(4px);
        position: relative;
        z-index: 10;
        margin: 20px auto;
    }

    .card img {
        width: 100%;
        height: 240px;
        object-fit: contain;
        border-radius: 8px;
        margin-bottom: 15px;
    }

    .card h2 {
        font-size: 1.4rem;
        color: #333;
        margin-bottom: 8px;
    }

    .card .description {
        color: #444;
        font-size: 0.95rem;
        margin-bottom: 8px;
    }

    .card .price {
        color: #14532d;
        font-weight: bold;
        margin-bottom: 15px;
    }

    .glow-btn {
        background-color: #14532d;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 6px;
        font-weight: bold;
        position: relative;
        overflow: hidden;
        text-decoration: none;
        display: inline-block;
        margin-bottom: 10px;
        transition: 0.3s;
    }

    .glow-btn::before {
        content: '';
        position: absolute;
        top: 0;
        left: -75%;
        width: 50%;
        height: 100%;
        background: linear-gradient(120deg, transparent, rgba(255,255,255,0.6), transparent);
        transform: skewX(-20deg);
    }

    .glow-btn:hover::before {
        animation: shine 0.8s forwards;
    }

    @keyframes shine {
        0% { left: -75%; }
        100% { left: 125%; }
    }

    .back-btn {
        background-color: #e91e63;
    }

    .back-btn:hover {
        background-color: #c2185b;
    }

    .flash-message {
        position: absolute;
        top: -60px;
        width: 100%;
        text-align: center;
        z-index: 20;
    }

    .flash-box {
        display: inline-block;
        background-color: #14532d;
        color: white;
        padding: 10px 20px;
        border-radius: 8px;
        font-weight: bold;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.2);
        animation: fadeOut 3s forwards;
    }

    @keyframes fadeOut {
        0% { opacity: 1; }
        80% { opacity: 1; }
        100% { opacity: 0; }
    }

    @media (max-width: 640px) {
        .card-container {
            padding: 20px;
        }

        .card {
            max-width: 70%;
        }

        .card img {
            height: 200px;
        }

        .card h2 {
            font-size: 1.2rem;
        }

        .card .description {
            font-size: 0.9rem;
        }

        .glow-btn {
            width: 50%;
        }
    }
</style>

<div class="card-container">
    @if(session('success'))
        <div class="flash-message">
            <div class="flash-box">
                {{ session('success') }}
            </div>
        </div>
    @endif

    <div class="card">
        <img src="{{ $product->image ? asset('images/' . $product->image) : asset('images/default.jpg') }}" alt="{{ $product->name }}" class="mx-auto mb-4 rounded-lg shadow-md">
        <h2>{{ $product->name }}</h2>
        <div class="description">{{ $product->description }}</div>
        <div class="price">{{ $product->price }} ريال</div>

        <form action="{{ route('cart.add', $product->id) }}" method="POST">
            @csrf
            <button type="submit" class="glow-btn add-to-cart-btn">أضف إلى السلة</button>
        </form>

        <a href="{{ route('products.index') }}" class="glow-btn back-to-products-btn">رجوع إلى المنتجات</a>
    </div>
</div>
@endsection