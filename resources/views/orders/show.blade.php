@extends('landing.tracking.index')

@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Order Details</h3>
        </div>
        <div class="card-body">
            <div class="mb-3">
                <label class="form-label"><strong>Product Name:</strong></label>
                <p>{{ $order->product->name }}</p>
            </div>
            <div class="mb-3">
                <label class="form-label"><strong>Customer Name:</strong></label>
                <p>{{ $order->customer_name }}</p>
            </div>
            <div class="mb-3">
                <label class="form-label"><strong>Customer Phone:</strong></label>
                <p>{{ $order->customer_phone }}</p>
            </div>
            <div class="mb-3">
                <label class="form-label"><strong>Tracking Number:</strong></label>
                <p>{{ $order->tracking_number }}</p>
            </div>
            <div class="mb-3">
                <label class="form-label"><strong>Status:</strong></label>
                <p>{{ $status }}</p>
            </div>
            <div>
                <a href="/landing" class="btn btn-secondary">Back to home</a>
            </div>
        </div>
    </div>
</div>
@endsection
