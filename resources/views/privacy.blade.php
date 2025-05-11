@extends('layouts.app')

@section('title', 'سياسة الخصوصية')

@section('content')
<style>
    .privacy-card {
        background-color: rgba(255, 255, 255, 0.85);
        border-radius: 12px;
        padding: 30px;
        max-width: 800px;
        margin: 50px auto;
        box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        backdrop-filter: blur(4px);
        color: #333;
        line-height: 1.8;
    }

    .privacy-card h1 {
        font-size: 2rem;
        color: #14532d;
        text-align: center;
        margin-bottom: 20px;
    }

    .privacy-card p {
        margin-bottom: 15px;
    }

    @media (max-width: 640px) {
        .privacy-card {
            padding: 20px;
            margin: 30px 15px;
        }

        .privacy-card h1 {
            font-size: 1.5rem;
        }

        .privacy-card p {
            font-size: 0.95rem;
        }
    }
</style>

<!-- خلفية واضحة تغطي الصفحة -->
<div style="min-height: 100vh; background-image: url('{{ asset('images/coffee-bg.jpg') }}'); background-size: cover; background-position: center; padding: 40px 15px;">
    <div class="privacy-card">
        <h1>سياسة الخصوصية</h1>
        <p>
            مرحبًا بك في موقع حبة محمصة. هذه السياسة تشرح كيفية جمع بياناتك، واستخدامها، وحمايتها.
            نلتزم بحماية خصوصيتك، وتستخدم بياناتك فقط لتحسين تجربتك معنا.
        </p>
        <p>
            يتم جمع المعلومات عند تسجيل الدخول أو استخدام خدماتنا، وتُخزن وفق أعلى معايير الأمان.
            لا نشارك بياناتك مع أطراف ثالثة دون موافقتك الصريحة.
        </p>
        <p>
            باستخدامك للموقع، فإنك توافق على ممارساتنا لهذه السياسة. نحتفظ بحق تعديلها في أي وقت.
            يُنصح بمراجعتها بشكل دوري.
        </p>
    </div>
</div>
@endsection