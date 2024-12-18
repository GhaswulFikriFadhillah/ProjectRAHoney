@extends('layouts.admin')

@section('title', 'Detail Pesanan')

@section('content')
<div class="container-fluid page-body-wrapper">
  <h4>Detail Pesanan #{{ $order->id }}</h4>
  <p><strong>Nama Pembeli:</strong> {{ $order->customer_name }}</p>
  <p><strong>Status Pesanan:</strong> {{ $order->status->name }}</p>
  <p><strong>Produk:</strong> {{ $order->product->name }}</p>
  <p><strong>Total Harga:</strong> Rp. {{ number_format($order->total_price, 0, ',', '.') }}</p>
</div>
@endsection
