<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Game Key Store - Cart</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body>
    @extends('layouts.app')

    @section('content')
    <div class="container">
        <h1>Your Shopping Cart</h1>
        @if(session('cart') && count(session('cart')) > 0)
            <table class="cart-table">
                <thead>
                    <tr>
                        <th>Game</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach(session('cart') as $id => $details)
                        <tr>
                            <td>{{ $details['name'] }}</td>
                            <td>${{ number_format($details['price'], 2) }}</td>
                            <td>
                                <input type="number" value="{{ $details['quantity'] }}" min="1" max="10" data-id="{{ $id }}" class="quantity-input">
                            </td>
                            <td>${{ number_format($details['price'] * $details['quantity'], 2) }}</td>
                            <td>
                                <form action="{{ route('cart.remove', $id) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="remove-button">Remove</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="cart-summary">
                <h2>Cart Summary</h2>
                <p>Total: ${{ number_format(array_sum(array_column(session('cart'), 'price')), 2) }}</p>
                <a href="{{ route('checkout') }}" class="checkout-button">Proceed to Checkout</a>
            </div>
        @else
            <p>Your cart is empty. Start adding games!</p>
            <a href="{{ route('home') }}" class="continue-shopping">Continue Shopping</a>
        @endif
    </div>
    @endsection

    <script src="{{ asset('js/cart.js') }}"></script>
</body>
</html>
