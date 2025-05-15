<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - حبة محمصة</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
        header {
            background-color: #f8d7da;
            padding: 15px 20px;
            position: sticky;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        body {
            background: url('{{ asset('images/coffee-bg.jpg') }}') no-repeat center center fixed;
            background-size: cover;
        }

        .header-container {
            position: relative;
            text-align: center;
        }

        .header-container h2 {
            color: #14532d;
            font-weight: bold;
            margin: 0;
            font-size: 1.5rem;
        }

        .burger {
            background: none;
            border: none;
            font-size: 24px;
            cursor: pointer;
            color: #14532d;
            position: absolute;
            left: 20px;
            top: 12px;
            z-index: 1001;
        }

        .navbar-menu {
            display: none;
            background-color: #f5f5dc;
            padding: 15px;
            border-radius: 10px;
            margin-top: 10px;
            position: absolute;
            top: 60px;
            left: 15px;
            width: 200px;
            z-index: 999;
            text-align: right;
        }

        .navbar-menu a {
            display: block;
            color: #14532d;
            font-weight: bold;
            margin: 10px 0;
            text-decoration: none;
        }

        .navbar-menu a i {
            margin-left: 8px;
            color: #14532d;
        }
    </style>
</head>

<body>

    <!-- الهيدر -->
    <header>
        <div class="header-container">
            <h2>حبّة محمصة</h2>
            <button class="burger" onclick="toggleMenu()">
                <i class="fas fa-bars"></i>
            </button>
            <div id="menu" class="navbar-menu">
                <a href="{{ route('home') }}">الرئيسية <i class="fas fa-home"></i></a>
                <a href="{{ route('products.index') }}">منتجاتنا <i class="fas fa-mug-hot"></i></a>
                <a href="{{ route('cart.index') }}">السلة <i class="fas fa-shopping-cart"></i></a>
                <a href="{{ route('about') }}">من نحن <i class="fas fa-user-pen"></i></a>
                <a href="{{ route('privacy') }}">الخصوصية <i class="fas fa-shield-alt"></i></a>
                <a href="{{ route('contact') }}">تواصل معنا <i class="fas fa-envelope"></i></a>
            </div>
        </div>
    </header>

    <!-- محتوى الصفحة -->
    <main>
        @yield('content')
    </main>

    <!-- الفوتر -->
    <footer style="background-color: #fce4ec; text-align: center; padding: 20px; margin-top: 50px;">
        <p style="margin: 0;">© 2025 متجر حبة محمصة. جميع الحقوق محفوظة.</p>
    </footer>

    <!-- سكربت تشغيل القائمة -->
    <script>
        function toggleMenu() {
            var menu = document.getElementById("menu");
            menu.style.display = (menu.style.display === "block") ? "none" : "block";
        }

        document.addEventListener('click', function (e) {
            const menu = document.getElementById('menu');
            const burger = document.querySelector('.burger');
            if (!burger.contains(e.target) && !menu.contains(e.target)) {
                menu.style.display = "none";
            }
        });
    </script>

</body>
</html>