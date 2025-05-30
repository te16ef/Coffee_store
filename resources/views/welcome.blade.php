@extends('layouts.app')

@section('title', 'الرئيسية')

@section('content')
<style>
    @media (max-width: 640px) {
        .home-box {
            padding: 25px 20px !important;
            max-width: 90% !important;
        }

        .home-box h2 {
            font-size: 1.3rem !important;
        }

        .home-box p {
            font-size: 0.95rem !important;
        }

        .home-box a {
            width: 100%;
            display: block;
            font-size: 1rem;
            padding: 12px 0;
        }
    }

    .glow-btn {
        position: relative;
        overflow: hidden;
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
        animation: shine 1.5s infinite;
    }

    @keyframes shine {
        0% { left: -75%; }
        100% { left: 125%; }
    }
</style>

<div style="background-image: url('{{ asset('images/coffee-bg.jpg') }}'); background-size: cover; background-position: center; min-height: 100vh; display: grid; place-items: center; padding: 20px;">
    <div class="home-box" style="background-color: rgba(255, 240, 240, 0.95); padding: 40px 30px; border-radius: 12px; box-shadow: 0 4px 10px rgba(0,0,0,0.1); max-width: 600px; text-align: center;">

        <p style="font-size: 1rem; color: #d63384; margin-bottom: 10px;">
            نورتنا ✨
        </p>

        <h2 style="font-size: 1.6rem; color: #d63384; margin-bottom: 10px; font-weight: 400;">
            من أول رشفة .. بتعرف الفرق
        </h2>

        <p style="font-size: 1rem; color: #555; margin-bottom: 30px;">
            للذويقين بس !
        </p>

        <a href="{{ route('products.index') }}" class="glow-btn"
           style="background-color: #14532d; color: white; padding: 10px 0; border-radius: 6px; text-decoration: none; font-weight: bold; font-size: 0.95rem; display: block; width: 90%; margin: 0 auto;">
        ابدأ التذوّق
        </a>
    </div>
</div>
@endsection