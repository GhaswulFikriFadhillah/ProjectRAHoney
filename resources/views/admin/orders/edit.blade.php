@extends('layouts.admin')

@section('title', 'Edit Pesanan')

@section('content')
<div class="container-fluid page-body-wrapper">
  <h4>Edit Pesanan #{{ $order->id }}</h4>
  <form action="{{ route('orders.update', $order->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
      <label for="customer_name" class="form-label">Nama Pembeli</label>
      <input type="text" name="customer_name" id="customer_name" class="form-control" value="{{ $order->customer_name }}" required>
    </div>
    <div class="mb-3">
      <label for="product_id" class="form-label">Produk</label>
      <select name="product_id" id="product_id" class="form-control" required>
        @foreach($products as $product)
          <option value="{{ $product->id }}" {{ $order->product_id == $product->id ? 'selected' : '' }}>{{ $product->name }}</option>
        @endforeach
      </select>
    </div>
    <div class="mb-3">
      <label for="status_id" class="form-label">Status Pesanan</label>
      <select name="status_id" id="status_id" class="form-control" required>
        @foreach($orderStatuses as $status)
          <option value="{{ $status->id }}" {{ $order->status_id == $status->id ? 'selected' : '' }}>{{ $status->name }}</option>
        @endforeach
      </select>
    </div>
    <button type="submit" class="btn btn-primary">Update Pesanan</button>
  </form>
</div>
@endsection
