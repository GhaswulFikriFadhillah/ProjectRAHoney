@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center">Our Products</h1>
    <div class="row">
        @foreach($products as $product)
        <div class="col-md-4">
            <div class="card mb-4">
                <img src="{{ $product->image_url }}" class="card-img-top" alt="{{ $product->name }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $product->name }}</h5>
                    <p class="card-text">{{ $product->description }}</p>
                    <p class="card-text text-danger">${{ $product->price }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection