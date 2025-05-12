@extends('layouts.app')

@section('title', 'إتمام الطلب')

@section('content')
<style>
    .checkout-card {
        background-color: #f8d7da;
        padding: 25px;
        border-radius: 10px;
        max-width: 400px;
        margin: 40px auto;
        box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }

    .checkout-card input {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border-radius: 6px;
        border: 1px solid #ccc;
    }

    .checkout-card button {
        width: 100%;
        background-color: #14532d;
        color: white;
        padding: 10px;
        border: none;
        border-radius: 6px;
        cursor: pointer;
    }

    .checkout-card button:hover {
        background-color: #0f3d22;
    }

    .thank-you-banner {
        display: none;
        background-color: #d1e7dd;
        color: #0f5132;
        padding: 20px;
        border-radius: 10px;
        text-align: center;
        margin-top: 20px;
        animation: fadeInOut 20s forwards;
    }

    @keyframes fadeInOut {
        0% { opacity: 0; }
        5% { opacity: 1; }
        95% { opacity: 1; }
        100% { opacity: 0; display: none; }
    }
</style>

<div class="checkout-card">
    <form onsubmit="showThankYou(event)">
        <input type="text" placeholder="الاسم الكامل" required>
        <input type="text" placeholder="المدينة" required>
        <input type="text" name="phone" placeholder="رقم الجوال" required style="direction: rtl;">
        <button type="submit">تأكيد البيانات</button>
    </form>

    <div id="thankYou" class="thank-you-banner">
        <h3>هالمره حسابك علينا يالغالي!</h3>
        <p>تم تاكيد طلبك بنجاح ♡ </p>
    </div>
</div>

<script>
    function showThankYou(event) {
        event.preventDefault();
        const banner = document.getElementById('thankYou');
        banner.style.display = 'block';
        banner.scrollIntoView({ behavior: 'smooth' });

        setTimeout(() => {
            banner.style.display = 'none';
        }, 20000);
    }
</script>
@endsection