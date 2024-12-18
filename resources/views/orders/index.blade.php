@extends('layouts.admin')

@section('content')
<div class="card">
  <div class="card-body">
    <p class="card-title">Order List</p>
    <div class="table-responsive">
      <table class="table table-striped table-borderless">
        <thead>
          <tr>
            <th>Order Number</th>
            <th>Customer Name</th>
            <th>Status</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach($orders as $order)
          <tr>
            <td>{{ $order->order_number }}</td>
            <td>{{ $order->customer_name }}</td>
            <td>{{ $order->status }}</td>
            <td>
              <a href="{{ route('admin.orders.edit', $order->id) }}" class="btn btn-warning">Edit</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection
