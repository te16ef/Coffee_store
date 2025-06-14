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
        border-radius: 8px;
        box-shadow: 0 2px 6px rgba(0,0,0,0.1);
        text-align: center;
        transition: transform 0.3s ease;
        padding: 6px;
        max-width: 170px;
        margin: 0 auto;
    }



    .product-card:hover {
        transform: translateY(-5px);
    }

    .product-card img {
        width: 150px;
        height: 160px;
        min-height: 250px;
        object-fit: cover;
        border-radius: 8px;
        margin-bottom: 5px;
        display: block;
    }

    .product-card h2 {
        font-size: 1.1rem;
        font-weight: bold;
        color: #333;
        margin-bottom: 0px;
    }

     .product-card h3 {
        white-space: nowrap;
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
        width: 60%;
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
            padding: 10px;
            gap: 10px;
            justify-self: center;
            width: 100%;
            padding: 10px;
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
   <div class="product-grid" style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 10px; padding: 10px 1px ;">
        @foreach ($products as $product)
    @if ($product->image)
        <div class="product-card">
           <img src="{{ asset('images/' . $product->image) }}"
     alt="{{ $product->name }}"
     style="object-fit: contain; width: 150px; height: 250px; max-height: 180px; border-radius: 8px;">
            <h3>{{ $product->name }}</h3>
            <p>{{ $product->price }} ريال</p>
            <a href="{{ route('products.show', $product->id) }}" class="glow-button show-details-btn">عرض التفاصيل</a>
        </div>
    @endif
@endforeach
    </div>
</div>
@endsection