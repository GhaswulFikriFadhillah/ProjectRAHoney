@extends('layouts.admin')

@section('title', 'Detail Ulasan')

@section('content')
<div class="container-fluid page-body-wrapper">
  <h4>Detail Ulasan #{{ $rating->id }}</h4>
  <p><strong>Nama Produk:</strong> {{ $rating->product->name }}</p>
  <p><strong>Rating:</strong> {{ $rating->rating }} / 5</p>
  <p><strong>Ulasan:</strong> {{ $rating->review }}</p>
</div>
@endsection
