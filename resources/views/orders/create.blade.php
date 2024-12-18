@extends('layouts.admin')

@section('content')
<div class="card">
  <div class="card-body">
    <p class="card-title">Create Order</p>
    <form action="{{ route('admin.orders.store') }}" method="POST">
      @csrf
      <div class="form-group">
        <label for="order_number">Order Number</label>
        <input type="text" class="form-control" id="order_number" name="order_number" required>
      </div>
      <div class="form-group">
        <label for="customer_name">Customer Name</label>
        <input type="text" class="form-control" id="customer_name" name="customer_name" required>
      </div>
      <button type="submit" class="btn btn-primary">Save</button>
    </form>
  </div>
</div>
@endsection
