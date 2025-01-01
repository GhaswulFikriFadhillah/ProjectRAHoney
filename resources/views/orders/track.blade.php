{{-- @extends('layouts.web')

@section('content')
<div class="container py-5">
    <h1 class="text-center mb-4">Track Your Order</h1>

    <!-- Form Pencarian -->
    <form action="{{ route('orders.track.post') }}" method="POST" class="mb-5">
        @csrf
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="input-group">
                    <input type="text" name="tracking_number" class="form-control" placeholder="Enter your tracking number" required>
                    <button type="submit" class="btn btn-primary">Track</button>
                </div>
            </div>
        </div>
    </form>

    <!-- Hasil Tracking -->
    @isset($order)
        <div class="card">
            <div class="card-body">
                <h4>Tracking Details</h4>
                <p><strong>Order ID:</strong> {{ $order->id }}</p>
                <p><strong>Product:</strong> {{ $order->product->name }}</p>
                <p><strong>Customer Name:</strong> {{ $order->customer_name }}</p>
                <p><strong>Phone:</strong> {{ $order->customer_phone }}</p>
                <p><strong>Status:</strong> {{ $trackingStatus }}</p>
            </div>
        </div>
    @endisset

    @if(session('error'))
        <div class="alert alert-danger mt-3">
            {{ session('error') }}
        </div>
    @endif
</div>
@endsection --}}
