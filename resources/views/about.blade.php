@extends('layouts.app')

@section('title', 'من نحن')

@section('content')
<style>
    @media (max-width: 640px) {
        .about-box {
            padding: 25px 15px !important;
        }

        .about-box h2 {
            font-size: 1.5rem !important;
        }

        .about-box p {
            font-size: 1rem !important;
        }

        .about-box blockquote {
            padding: 15px !important;
            font-size: 0.95rem !important;
        }

        .about-box .signature {
            font-size: 0.95rem !important;
        }
    }
</style>

<div style="min-height: 100vh; background-image: url('{{ asset('images/coffee-bg.jpg') }}'); background-size: cover; background-position: center; padding: 40px;">
    <div class="about-box" style="background-color: rgba(255, 255, 255, 0.85); border-radius: 12px; padding: 40px 30px; max-width: 800px; margin: auto; text-align: center; line-height: 2; box-shadow: 0 4px 10px rgba(0,0,0,0.1);">

        <!-- العنوان -->
        <h2 style="color: #d63384; font-size: 2rem; margin-bottom: 10px;">
            حبّة محمصة
        </h2>

        <p style="color: #a94455; font-size: 1.2rem; margin-bottom: 30px;">
            مزاج برمجي بنكهة القهوة
        </p>

        <!-- الرسالة -->
        <p style="color: #444; font-size: 1.05rem;">
            بداية من شغف، وانتهت بمذاق.<br>
            ما بين الأكواد، والبيانات، والتصميم، ظهرت فكرة بسيطة… تحولت لهوية.<br>
            هذا المتجر يعكس رحلة في عالم التقنية، وتجربة متواضعة لكنها مليانة حب، تعلّم، وتفاصيل صنعت من الشغف مشروع.<br>
            وما كان بس كود! حتى كيس البن أخذ منّي ذوق، وتركيز، ونيّة.<br>
            هذا المشروع البسيط هو بداية، وأبدًا ما راح يكون نهاية.<br>
            <strong>انعكاس بسيط لشـــغـف عمــــــــيـــق ✨</strong>
        </p>

        <!-- اقتباس رسمي -->
        <blockquote style="margin: 40px auto; font-style: italic; background-color: #f8d7da; padding: 20px; border-radius: 10px; max-width: 550px; color: #14532d;">
            "نحاول أن لا نعمل إلا مع الحالمين؛ أولئك الذين يريدون خلق كل شيء جديد في هذا العالم."<br>
            <span style="font-size: 0.9rem;">— ولي العهد محمد بن سلمان، 2021</span>
        </blockquote>

        <!-- التوقيع -->
        <div class="signature" style="margin-top: 20px; font-size: 1rem; color: #d63384;">
            <strong>بُرمج بكامل الحب – طيف حسين ♡</strong><br>
            <span style="font-size: 0.9rem; color: #888;">10-5-2025</span>
        </div>

    </div>
</div>
@endsection