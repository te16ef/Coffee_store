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

    <!-- الهيدر -->
<header style="background-color: #f5f5dc; padding: 15px 25px; position: sticky; top: 0; z-index: 1000; box-shadow: 0 2px 5px rgba(0,0,0,0.1);">
    <style>
        .nav-link {
            color: #14532d;
            text-decoration: none;
            font-weight: bold;
            margin-left: 20px;
            transition: all 0.3s ease;
        }

        .nav-link i {
            margin-right: 6px;
            color: inherit;
        }

        .nav-link:hover {
            color: #0f3d22;
            text-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }
    </style>

    <div style="display: flex; justify-content: space-between; align-items: center;">
        <h2 style="color: #14532d; margin: 0;">حبة محمصة</h2>

        <nav style="display: flex; align-items: center;">
            <a href="{{ route('home') }}" class="nav-link">الرئيسية <i class="fas fa-home"></i></a>
            <a href="{{ route('products.index') }}" class="nav-link">منتجاتنا <i class="fas fa-mug-hot"></i></a>
            <a href="{{ route('cart.index') }}" class="nav-link">السلة <i class="fas fa-shopping-cart"></i></a>
            <a href="{{ route('about') }}" class="nav-link">من نحن <i class="fas fa-user-pen"></i></a>
            <a href="{{ route('privacy') }}" class="nav-link">الخصوصية <i class="fas fa-shield-alt"></i></a>
            <a href="{{ route('contact') }}" class="nav-link">تواصل معنا <i class="fas fa-envelope"></i></a>
        </nav>
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

</body>
</html>
