@extends('layouts.admin')

@section('title', 'Detail Produk')

@section('content')
<div class="container-fluid page-body-wrapper">
  <h4>Detail Produk #{{ $product->id }}</h4>
  <p><strong>Nama Produk:</strong> {{ $product->name }}</p>
  <p><strong>Deskripsi:</strong> {{ $product->description }}</p>
  <p><strong>Harga:</strong> Rp. {{ number_format($product->price, 0, ',', '.') }}</p>
  <p><strong>Stok:</strong> {{ $product->stock }}</p>
  <img src="{{ asset('images/products/' . $product->image) }}" class="img-fluid" alt="{{ $product->name }}">
</div>
@endsection
