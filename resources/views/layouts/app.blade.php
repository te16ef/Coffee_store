<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>حبة محمصة</title>

    <!-- أيقونات FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <link href="https://fonts.googleapis.com/css2?family=Amiri&display=swap" rel="stylesheet">

<style>
    body, h1, h2, h3, h4, h5, h6, p, a, button {
        font-family: 'Amiri', serif;
    }


        .header-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px;
            background-color: #fce4ec;
        }

        .navbar-menu {
            display: none;
            position: absolute;
            top: 60px;
            right: 10px;
            background-color: #fce4ec;
            padding: 10px;
            border-radius: 8px;
            text-align: right;
        }

        .navbar-menu a {
            display: block;
            margin-bottom: 8px;
            color: #14532d;
            text-decoration: none;
        }

        .navbar-menu a i {
            margin-left: 5px;
        }

        .burger {
            background: none;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>

    <header>
    <div class="header-container" style="position: relative; background-color: #e6f2e6; padding: 15px; display: flex; align-items: center; justify-content: center;">
        
        <!-- زر الهامبرقر على اليمين -->
        <button class="burger" onclick="toggleMenu()" style="position: absolute; right: 15px; top: 50%; transform: translateY(-50%); background: none; border: none; cursor: pointer;">
            <i class="fas fa-bars" style="font-size: 20px; color: #14532d;"></i>
        </button>

        <!-- اسم المتجر في المنتصف -->
        <h2 style="color: #14532d; font-family: 'Amiri', serif; font-size: 20px; margin: 0;">حـبّــة محـمــصة</h2>

        <!-- القائمة -->
        <div id="menu" class="navbar-menu" style="display: none; position: absolute; top: 60px; right: 10px; background-color: #fce4ec; padding: 10px; border-radius: 8px; text-align: right; z-index: 100;">
            <a href="{{ route('home') }}">الرئيسية <i class="fas fa-home"></i></a><br>
            <a href="{{ route('products.index') }}">منتجاتنا <i class="fas fa-mug-hot"></i></a><br>
            <a href="{{ route('cart.index') }}">السلة <i class="fas fa-shopping-cart"></i></a><br>
            <a href="{{ route('about') }}">من نحن <i class="fas fa-user-pen"></i></a><br>
            <a href="{{ route('privacy') }}">الخصوصية <i class="fas fa-shield-alt"></i></a><br>
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
        <p style="margin: 0;">© 2025 متجر حبّة محمصة. جميع الحقوق محفوظة.</p>
    </footer>

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

</body>
</html>