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
    }

    .card button:hover {
        background-color: #0f3d22;
    }

    .success-message {
        display: none;
        background-color: #d1e7dd;
        color: #0f5132;
        padding: 20px;
        border-radius: 10px;
        max-width: 400px;
        margin: 0 auto 30px auto;
        text-align: center;
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

        <!-- إشعار نجاح الطلب -->
        <div id="orderSuccess" class="success-message">
            <p style="font-size: 1.2rem;">حسابك علينا يالغالي!</p>
            <p style="font-size: 0.9rem;">تم إصدار الطلب بنجاح ✨</p>
            <a href="{{ route('products.index') }}" style="display: inline-block; margin-top: 10px; background-color: #d63384; color: white; padding: 8px 16px; border-radius: 6px; text-decoration: none;">تم</a>
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
                </div>
            @endforeach
        </div>

        <div style="text-align: center; margin-top: 30px;">
            <button onclick="showOrderSuccess()" style="background-color: #14532d; color: white; padding: 10px 20px; border-radius: 6px;">إتمام الطلب</button>
        </div>

        <script>
            function showOrderSuccess() {
                const box = document.getElementById('orderSuccess');
                box.style.display = 'block';
                box.scrollIntoView({ behavior: 'smooth', block: 'start' });

                setTimeout(() => {
                    box.style.display = 'none';
                }, 3000);
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