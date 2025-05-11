@extends('layouts.app')

@section('title', 'الرئيسية')

@section('content')
<style>
    @media (max-width: 640px) {
        .home-box {
            padding: 25px 20px !important;
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
        }
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

        <a href="{{ route('products.index') }}" class="glow-btn" style="background-color: #14532d; color: white; padding: 12px 24px; border-radius: 6px; text-decoration: none; font-weight: bold; display: inline-block;">
            ابدأ التذوّق
        </a>
    </div>
</div>
@endsection