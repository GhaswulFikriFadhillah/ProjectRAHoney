@extends('layouts.app')

@section('title', 'Order Management')

@section('content')
<h1 class="mt-5">Order Management</h1>
<table class="table">
    <thead>
        <tr>
            <th>Order Code</th>
            <th>Customer Name</th>
            <th>Product</th>
            <th>Quantity</th>
            <th>Total Price</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($orders as $order)
        <tr>
            <td>{{ $order->unique_code }}</td>
            <td>{{ $order->customer_name }}</td>
            <td>{{ $order->product->name }}</td>
            <td>{{ $order->quantity }}</td>
            <td>Rp {{ number_format($order->total_price, 0, ',', '.') }}</td>
            <td>
                <form action="{{ route('admin.orders.updateStatus', $order) }}" method="POST">
                    @csrf
                    <select name="status" onchange="this.form.submit()">
                        @foreach(App\Models\Order::STATUS as $status)
                            <option value="{{ $status }}" 
                                {{ $order->status == $status ? 'selected' : '' }}>
                                {{ $status }}
                            </option>
                        @endforeach
                    </select>
                </form>
            </td>
            <td>
                <a href="#" class="btn btn-info btn-sm">Detail</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

{{ $orders->links() }}
@endsection