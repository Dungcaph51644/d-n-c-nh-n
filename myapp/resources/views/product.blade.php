@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <img src="{{ asset('images/' . $product->image) }}" alt="{{ $product->name }}" class="img-fluid">
        </div>
        <div class="col-md-6">
            <h1>{{ $product->name }}</h1>
            <p class="lead">{{ $product->description }}</p>
            <h3>Price: ${{ $product->price }}</h3>
            <form action="{{ route('cart.add', $product->id) }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-primary">Add to Cart</button>
            </form>
        </div>
    </div>
    <hr>
    <h2>Related Products</h2>
    <div class="row">
        @foreach($relatedProducts as $related)
        <div class="col-md-4">
            <div class="card">
                <img src="{{ asset('images/' . $related->image) }}" class="card-img-top" alt="{{ $related->name }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $related->name }}</h5>
                    <p class="card-text">${{ $related->price }}</p>
                    <a href="" class="btn btn-secondary">View Product</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
