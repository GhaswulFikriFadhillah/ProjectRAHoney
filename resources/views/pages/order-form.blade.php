@extends('layouts.app')

@section('title', 'Order Form')

@section('content')
<h1 class="mt-5">Order Form</h1>
<form action="{{ route('order.store') }}" method="POST">
    @csrf
    <input type="hidden" name="product_id" value="{{ $product->id }}">
    <div class="form-group">
        <label for="customer_name">Customer Name</label>
        <input type="text" name="customer_name" id="customer_name" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="customer_phone">Customer Phone</label>
        <input type="text" name="customer_phone" id="customer_phone" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="customer_address">Customer Address</label>
        <textarea name="customer_address" id="customer_address" class="form-control" required></textarea>
    </div>
    <div class="form-group">
        <label for="quantity">Quantity</label>
        <input type="number" name="quantity" id="quantity" class="form-control" min="1" required>
    </div>
    <button type="submit" class="btn btn-primary">Submit Order</button>
</form>
@endsection