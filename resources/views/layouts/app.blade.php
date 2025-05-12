<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - حبّة محمصة</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <style>
        .nav-link {
            color: #14532d;
            text-decoration: none;
            font-weight: bold;
            margin-right: 20px;
            transition: all 0.3s ease;
        }

        .nav-link i {
            margin-left: 6px;
        }

        .nav-link:hover {
            color: #0f3d22;
        }

        .mobile-menu {
            display: none;
            flex-direction: column;
            background-color: #f8d7da;
            padding: 15px;
            border-radius: 8px;
            margin-top: 10px;
        }

        .mobile-menu a {
            margin: 8px 0;
        }

        @media (max-width: 768px) {
            .desktop-nav {
                display: none;
            }

            .mobile-toggle {
                display: block !important;
            }

            .mobile-menu {
                display: none;
            }

            .mobile-menu.show {
                display: flex;
            }
        }

        @media (min-width: 769px) {
            .mobile-toggle {
                display: none !important;
            }
        }
    </style>
</head>
<body>

<!-- الهيدر -->
<header class="bg-[#f5f5dc] p-4 shadow-md sticky top-0 z-50">
<div class="container mx-auto flex items-center justify-between">
        <!-- اسم المتجر في الجوال واللابتوب -->
        <h1 class="text-[#14532d] text-xl font-bold block md:hidden text-center w-full">حبّة محمصة</h1>
        <h1 class="text-[#14532d] text-xl font-bold hidden md:block">حبّة محمصة</h1>

        <!-- زر البرقر للجوال -->
        <div class="block md:hidden absolute right-4">
            <button onclick="document.getElementById('mobileMenu').classList.toggle('hidden')">
                <i class="fas fa-bars text-[#14532d] text-xl"></i>
            </button>
        </div>

        <!-- روابط الهيدر للابتوب -->
        <nav class="hidden md:flex space-x-6">
            <a href="{{ route('home') }}" class="text-[#14532d] font-semibold hover:underline">الرئيسية <i class="fas fa-home ml-2"></i></a>
            <a href="{{ route('products.index') }}" class="text-[#14532d] font-semibold hover:underline">منتجاتنا <i class="fas fa-mug-hot ml-2"></i></a>
            <a href="{{ route('cart.index') }}" class="text-[#14532d] font-semibold hover:underline">السلة <i class="fas fa-shopping-cart ml-2"></i></a>
            <a href="{{ route('about') }}" class="text-[#14532d] font-semibold hover:underline">من نحن <i class="fas fa-user-pen ml-2"></i></a>
            <a href="{{ route('privacy') }}" class="text-[#14532d] font-semibold hover:underline">الخصوصية <i class="fas fa-shield-alt ml-2"></i></a>
            <a href="{{ route('contact') }}" class="text-[#14532d] font-semibold hover:underline">تواصل معنا <i class="fas fa-envelope ml-2"></i></a>
        </nav>
    </div>

    <!-- قائمة الجوال -->
    <div id="mobileMenu" class="md:hidden hidden mt-3 px-4">
        <div class="bg-pink-100 rounded-lg p-4 space-y-2 text-right">
            <a href="{{ route('home') }}" class="block text-[#14532d] font-semibold">الرئيسية <i class="fas fa-home ml-2"></i></a>
            <a href="{{ route('products.index') }}" class="block text-[#14532d] font-semibold">منتجاتنا <i class="fas fa-mug-hot ml-2"></i></a>
            <a href="{{ route('cart.index') }}" class="block text-[#14532d] font-semibold">السلة <i class="fas fa-shopping-cart ml-2"></i></a>
            <a href="{{ route('about') }}" class="block text-[#14532d] font-semibold">من نحن <i class="fas fa-user-pen ml-2"></i></a>
            <a href="{{ route('privacy') }}" class="block text-[#14532d] font-semibold">الخصوصية <i class="fas fa-shield-alt ml-2"></i></a>
            <a href="{{ route('contact') }}" class="block text-[#14532d] font-semibold">تواصل معنا <i class="fas fa-envelope ml-2"></i></a>
        </div>
    </div>
</header>

<!-- سكربت لفتح القائمة -->
<script>
    function toggleMenu() {
        const menu = document.getElementById('mobileMenu');
        menu.classList.toggle('show');
    }
</script>

<main>
    @yield('content')
</main>

<footer style="background-color: #fce4ec; text-align: center; padding: 20px; margin-top: 50px;">
    <p style="margin: 0;">© 2025 متجر حبة محمصة. جميع الحقوق محفوظة.</p>
</footer>

</body>
</html>