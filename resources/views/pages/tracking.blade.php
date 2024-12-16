@extends('layouts.app')

@section('title', 'Tracking')

@section('content')
<h1 class="mt-5">Tracking</h1>
@if($order)
<div class="card">
    <div class="card-body">
        <h5 class="card-title">{{ $order->unique_code }}</h5>
        <p class="card-text">
            <strong>Customer Name:</strong> {{ $order->customer_name }}<br>
            <strong>Customer Phone:</strong> {{ $order->customer_phone }}<br>
            <strong>Customer Address:</strong> {{ $order->customer_address }}<br>
            <strong>Product:</strong> {{ $order->product->name }}<br>
            <strong>Quantity:</strong> {{ $order->quantity }}<br>
            <strong>Total Price:</strong> Rp {{ number_format($order->total_price, 0, ',', '.') }}<br>
            <strong>Status:</strong> {{ $order->status }}
        </p>
    </div>
</div>
@else
<div class="alert alert-danger">
    Tracking code not found
</div>
@endif
@endsection