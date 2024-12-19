@extends('layouts.admin')

@section('content')
<div class="card">
  <div class="card-body">
    <h4 class="card-title">Create Order</h4>
    <form action="{{ route('orders.store') }}" method="POST">
      @csrf
      <div class="form-group">
        <label for="product_id">Product</label>
        <select class="form-control" id="product_id" name="product_id" required>
          <option value="">Select Product</option>
          @foreach($products as $product)
          <option value="{{ $product->id }}">{{ $product->name }}</option>
          @endforeach
        </select>
      </div>
      <div class="form-group">
        <label for="customer_name">Customer Name</label>
        <input type="text" class="form-control" id="customer_name" name="customer_name" required>
      </div>
      <div class="form-group">
        <label for="customer_phone">Customer Phone</label>
        <input type="text" class="form-control" id="customer_phone" name="customer_phone" required>
      </div>
      <div class="form-group">
        <label for="tracking_number">Tracking Number</label>
        <input type="text" class="form-control" id="tracking_number" name="tracking_number" required>
      </div>
      <button type="submit" class="btn btn-primary">Save</button>
    </form>
  </div>
</div>
@endsection
