@extends('layouts.web')

@section('content')
<section class="product-detail py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="{{ $product->image_url }}" alt="{{ $product->name }}" class="img-fluid mb-3">
            </div>
            <div class="col-md-6">
                <h1>{{ $product->name }}</h1>
                <p>Harga: Rp{{ number_format($product->price, 0, ',', '.') }}</p>
                <p>{{ $product->description }}</p>
                <a href="{{ route('products.index') }}" class="btn btn-secondary">Kembali ke Daftar Produk</a>
            </div>
        </div>
    </div>
</section>
@endsection
