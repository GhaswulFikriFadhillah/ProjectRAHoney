@extends('layouts.web')

@section('title', $product->name)

@section('content')
<div class="container py-5">
  <div class="row">
    <div class="col-md-6">
      <img src="{{ asset('images/products/' . $product->image) }}" class="img-fluid" alt="{{ $product->name }}">
    </div>
    <div class="col-md-6">
      <h2>{{ $product->name }}</h2>
      <p>{{ $product->description }}</p>
      <p><strong>Harga:</strong> Rp. {{ number_format($product->price, 0, ',', '.') }}</p>
      <a href="{{ route('ratings.create', $product->id) }}" class="btn btn-success">Beri Rating</a>
    </div>
  </div>
</div>
@endsection
