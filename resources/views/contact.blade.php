@extends('layouts.app')

@section('title', 'تواصل معنا')

@section('content')
<style>
    body {
        background: url('{{ asset('images/coffee-bg.jpg') }}') no-repeat center center fixed;
        background-size: cover;
    }
    .contact-card {
        background-color: rgba(255, 255, 255, 0.85);
        border-radius: 12px;
        padding: 30px;
        max-width: 700px;
        margin: 50px auto;
        box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        backdrop-filter: blur(4px);
        color: #333;
    }

    .glow-title {
        font-size: 2rem;
        color: #14532d;
        text-align: center;
        margin-bottom: 20px;
        position: relative;
        overflow: hidden;
    }

    .glow-title::before {
        content: '';
        position: absolute;
        top: 0;
        left: -75%;
        width: 50%;
        height: 100%;
        background: linear-gradient(120deg, transparent, rgba(255,255,255,0.5), transparent);
        transform: skewX(-20deg);
        animation: shine 3s infinite;
    }

    @keyframes shine {
        0% {
            left: -75%;
        }
        100% {
            left: 125%;
        }
    }

    .contact-card input,
    .contact-card textarea {
        width: 100%;
        padding: 12px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 6px;
        font-size: 1rem;
    }

    .contact-card button {
        background-color: #14532d;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 6px;
        font-size: 1rem;
        cursor: pointer;
    }

    .contact-card button:hover {
        background-color: #0f3d22;
    }

    .success-message {
        background-color: #d1e7dd;
        color: #0f5132;
        padding: 15px;
        border-radius: 8px;
        text-align: center;
        margin-bottom: 20px;
        font-weight: bold;
    }

    @media (max-width: 640px) {
        .contact-card {
            padding: 20px;
            margin: 30px 15px;
        }

        .glow-title {
            font-size: 1.5rem;
        }

        .contact-card input,
        .contact-card textarea {
            font-size: 0.95rem;
        }

        .contact-card button {
            width: 100%;
        }
    }
</style>

<div class="contact-card">
    <h1 class="glow-title">عندك فكرة؟ ملاحظة؟ ولا حتى مديح؟ نبي نسمعه!</h1>

    @if(session('success'))
        <div class="success-message">
            {{ session('success') }}
        </div>
    @endif

    <form method="POST" action="{{ route('contact.send') }}">
        @csrf
        <input type="text" name="name" placeholder="الاسم الكامل" required>
        <input type="email" name="email" placeholder="البريد الإلكتروني" required>
        <textarea name="message" rows="5" placeholder="رسالتك..." required></textarea>
        <button type="submit">إرسال</button>
    </form>
</div>
@endsection