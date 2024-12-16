@extends('layouts.app')

@section('title', $product->name)

@section('content')
<section class="product-detail">
    <div class="row">
        <div class="col-md-6">
            <div class="product-gallery">
                <a href="{{ $product->imageUrl }}" data-lightbox="product-gallery" data-title="{{ $product->name }}">
                    <img src="{{ $product->imageUrl }}" alt="{{ $product->name }}" class="img-fluid">
                </a>
                @foreach($product->productImages as $image)
                <a href="{{ $image->imageUrl }}" data-lightbox="product-gallery" data-title="{{ $product->name }}">
                    <img src="{{ $image->imageUrl }}" alt="{{ $product->name }} thumbnail" class="img-thumbnail">
                </a>
                @endforeach
            </div>
        </div>
        <div class="col-md-6">
            <div class="product-info">
                <h1>{{ $product->name }}</h1>
                <p class="price">Rp {{ number_format($product->price, 0, ',', '.') }}</p>
                <div class="product-meta">
                    <span>Berat: {{ $product->weight }} gram</span>
                    <span>Kemasan: {{ $product->packaging }}</span>
                </div>
                <p class="description">{{ $product->description }}</p>
                <div class="product-actions">
                    <a href="{{ route('order.create', $product) }}" class="btn btn-primary">Order Now</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection