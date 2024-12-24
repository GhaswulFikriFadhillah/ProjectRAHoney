@extends('layouts.web')

@section('content')
<section class="products py-5 bg-light">
    <div class="section-header text-center mt-5">
      <h3 class="section-title">OUR PRODUCTS</h3>
    </div>
    <div class="swiper product-swiper overflow-hidden my-5">
      <div class="swiper-wrapper d-flex">
        @foreach ($products as $product)
        <div class="swiper-slide">
          <div class="product-item text-center">
            <img src="{{ $product->image_url }}" alt="{{ $product->name }}" class="img-fluid mb-3" style="max-height: 200px; object-fit: cover;">
            <h5>{{ $product->name }}</h5>
            <p>Rp{{ number_format($product->price, 0, ',', '.') }}</p>
            <a href="{{ route('products.show', $product->id) }}" class="btn btn-primary">Lihat Detail</a>
          </div>
        </div>
        @endforeach
      </div>
    </div>
    <div class="product-swiper-pagination d-flex justify-content-center mb-5"></div>
</section>
@endsection
