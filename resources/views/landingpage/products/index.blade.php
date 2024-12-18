@extends('layouts.web')

@section('title', 'Daftar Produk')

@section('content')
<div class="container py-5">
  <h2 class="text-center">Daftar Produk</h2>
  <div class="row">
    @foreach($products as $product)
      <div class="col-md-4 mb-4">
        <div class="card">
          <img src="{{ asset('images/products/' . $product->image) }}" class="card-img-top" alt="{{ $product->name }}">
          <div class="card-body">
            <h5 class="card-title">{{ $product->name }}</h5>
            <p class="card-text">{{ $product->description }}</p>
            <a href="{{ route('products.show', $product->id) }}" class="btn btn-primary">Lihat Detail</a>
          </div>
        </div>
      </div>
    @endforeach
  </div>
</div>
@endsection
