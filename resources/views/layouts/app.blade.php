<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - حبة محمصة</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <style>
        .nav-link {
            margin-left: 15px;
            color: #14532d;
            text-decoration: none;
            font-weight: bold;
            position: relative;
            transition: color 0.3s ease;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            bottom: -2px;
            right: 0;
            width: 0%;
            height: 2px;
            background-color: #14532d;
            transition: width 0.4s ease;
        }

        .nav-link:hover::after {
            width: 100%;
            left: 0;
        }
    </style>
</head>
<body>

    <!-- الهيدر للكمبيوتر -->
    <header class="hidden md:flex justify-between items-center bg-[#f5f5dc] px-6 py-4 shadow-md sticky top-0 z-50">
        <h2 class="text-green-900 font-bold text-xl m-0">حبة محمصة</h2>
        <nav class="flex items-center">
            <a href="{{ route('home') }}" class="nav-link">الرئيسية <i class="fas fa-home"></i></a>
            <a href="{{ route('products.index') }}" class="nav-link">منتجاتنا <i class="fas fa-mug-hot"></i></a>
            <a href="{{ route('cart.index') }}" class="nav-link">السلة <i class="fas fa-shopping-cart"></i></a>
            <a href="{{ route('about') }}" class="nav-link">من نحن <i class="fas fa-user-pen"></i></a>
            <a href="{{ route('privacy') }}" class="nav-link">الخصوصية <i class="fas fa-shield-alt"></i></a>
            <a href="{{ route('contact') }}" class="nav-link">تواصل معنا <i class="fas fa-envelope"></i></a>
        </nav>
    </header>

    <!-- الهيدر للجوال -->
    <header class="md:hidden bg-[#f5f5dc] p-4 shadow-md relative z-50">
        <div class="flex justify-between items-center">
            <!-- أيقونة المينيو -->
            <button id="menuToggle" class="text-2xl text-green-900 focus:outline-none">
                <i class="fas fa-bars"></i>
            </button>

            <!-- اسم المتجر -->
            <h1 class="text-green-900 font-bold text-lg">حبة محمصة</h1>
        </div>

        <!-- القائمة المنسدلة -->
        <div id="mobileMenu" class="hidden bg-[#f8d7da] mt-3 rounded-lg py-3 px-4 shadow-lg">
            <a href="{{ route('home') }}" class="block text-right py-2 text-green-900 font-semibold"><i class="fas fa-home ml-2"></i>الرئيسية</a>
            <a href="{{ route('products.index') }}" class="block text-right py-2 text-green-900 font-semibold"><i class="fas fa-mug-hot ml-2"></i>منتجاتنا</a>
            <a href="{{ route('cart.index') }}" class="block text-right py-2 text-green-900 font-semibold"><i class="fas fa-shopping-cart ml-2"></i>السلة</a>
            <a href="{{ route('about') }}" class="block text-right py-2 text-green-900 font-semibold"><i class="fas fa-user-pen ml-2"></i>من نحن</a>
            <a href="{{ route('privacy') }}" class="block text-right py-2 text-green-900 font-semibold"><i class="fas fa-shield-alt ml-2"></i>الخصوصية</a>
            <a href="{{ route('contact') }}" class="block text-right py-2 text-green-900 font-semibold"><i class="fas fa-envelope ml-2"></i>تواصل معنا</a>
        </div>
    </header>

    <!-- سكربت القائمة المنسدلة -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const toggle = document.getElementById('menuToggle');
            const menu = document.getElementById('mobileMenu');

            toggle.addEventListener('click', () => {
                menu.classList.toggle('hidden');
            });

            // إغلاق القائمة عند الضغط على رابط
            document.querySelectorAll('#mobileMenu a').forEach(link => {
                link.addEventListener('click', () => {
                    menu.classList.add('hidden');
                    });
            });
        });
    </script>

    <!-- محتوى الصفحة -->
    <main>
        @yield('content')
    </main>

    <!-- الفوتر -->
    <footer style="background-color: #fce4ec; text-align: center; padding: 20px; margin-top: 50px;">
        <p style="margin: 0;">© 2025 متجر حبة محمصة. جميع الحقوق محفوظة.</p>
    </footer>

</body>
</html>