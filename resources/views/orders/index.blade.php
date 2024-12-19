@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="card-body">
        <h3>Order List</h3>
        <a href="{{ route('orders.create') }}" class="btn btn-primary mb-3">Add New Order</a>
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <div class="table-responsive">
          <table class="table table-striped table-borderless">
        <table class="table">
            <thead>
                <tr>
                    <th>Customer Name</th>
                    <th>Product</th>
                    <th>Tracking Number</th>
                    {{-- <th>Status</th> --}}
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $order)
                    <tr>
                        <td>{{ $order->customer_name }}</td>
                        <td>{{ $order->product->name }}</td>
                        <td>{{ $order->tracking_number }}</td>
                        {{-- <td>{{ $order->status->name ?? 'Pending' }}</td> --}}
                        <td>
                            <a href="{{ route('orders.edit', $order->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('orders.destroy', $order->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                            {{-- <a href="{{ route('orders-status.edit', $order->status->id ?? 0) }}" class="btn btn-info btn-sm">Manage Status</a> --}}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
