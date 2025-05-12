@extends('layouts.app')

@section('title', 'سلة المشتريات')

@section('content')
<style>
    .card {
        background-color: #f8d7da;
        border-radius: 10px;
        padding: 15px;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
        max-width: 300px;
        text-align: center;
        width: 100%;
    }

    .card img {
        height: 220px;
        width: 100%;
        object-fit: cover;
        border-radius: 8px;
        margin-bottom: 10px;
    }

    .card h3 {
        font-size: 1.1rem;
        color: #333;
        margin-bottom: 8px;
    }

    .card p {
        font-size: 0.9rem;
        color: #555;
        margin-bottom: 10px;
    }

    .card button {
        background-color: #14532d;
        color: white;
        padding: 8px 16px;
        border: none;
        border-radius: 6px;
        cursor: pointer;
        margin-top: 8px;
    }

    .card button:hover {
        background-color: #0f3d22;
    }

    .alert-box {
        display: none;
        background-color: #d1e7dd;
        color: #0f5132;
        padding: 15px 20px;
        border-radius: 10px;
        text-align: center;
        max-width: 400px;
        margin: 0 auto 30px auto;
        box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }

    @media (max-width: 640px) {
        .card {
            max-width: 100%;
        }

        .card img {
            height: 180px;
        }

        .card h3 {
            font-size: 1rem;
        }

        .card p {
            font-size: 0.85rem;
        }

        .card button {
            width: 100%;
        }
    }
</style>

<div style="min-height: 100vh; padding: 40px;">
    @php $cart = session()->get('cart', []); @endphp

    @if(count($cart) > 0)

        @if (session('success'))
            <div id="successBox" class="alert-box">
                {{ session('success') }}
            </div>
        @endif

        <div id="orderSuccess" class="alert-box" style="display: none;">
            <p style="font-size: 1.1rem;">حسابك علينا يالغالي! تم اصدار طلبك </p>
        </div>

        <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 30px;">
            @foreach ($cart as $id => $details)
                <div class="card">
                    <img src="{{ asset('images/' . $details['image']) }}" alt="{{ $details['name'] }}">
                    <h3>{{ $details['name'] }}</h3>
                    <p>الكمية: {{ $details['quantity'] }}</p>
                    <form action="{{ route('cart.remove', $id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">إزالة من السلة</button>
                    </form>
       <a href="{{ route('checkout') }}" style="display: inline-block; background-color: #14532d; color: white; padding: 8px 16px; border-radius: 6px; margin-top: 8px; text-decoration: none;">
    إتمام الطلب
</a>
                </div>
            @endforeach
        </div>

        <script>
            function showOrderSuccess() {
                const box = document.getElementById('orderSuccess');
                box.style.display = 'block';
                box.scrollIntoView({ behavior: 'smooth', block: 'start' });
                setTimeout(() => {
                    box.style.display = 'none';
                }, 5000);
            }

            window.onload = function () {
                const successBox = document.getElementById('successBox');
                if (successBox) {
                    successBox.style.display = 'block';
                    setTimeout(() => {
                        successBox.style.display = 'none';
                    }, 5000);
                }
            }
        </script>

    @else
        <div style="display: flex; justify-content: center; align-items: center; min-height: 50vh;">
            <div style="background-color: #f8d7da; color: #333; padding: 25px 30px; border-radius: 10px; font-size: 1.1rem; box-shadow: 0 4px 12px rgba(0,0,0,0.1);">
                سلتك فاضية حالياً.
            </div>
        </div>
    @endif
</div>
@endsection