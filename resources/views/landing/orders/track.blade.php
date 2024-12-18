@extends('layouts.web')

@section('content')
<section id="tracking" class="py-5">
    <div class="container">
        <h2 class="text-center">Track Your Order</h2>
        <form action="{{ route('orders.track') }}" method="GET" class="text-center">
            <input type="text" name="tracking_number" placeholder="Enter tracking number" class="form-control w-50">
            <button type="submit" class="btn btn-dark mt-3">Track Order</button>
        </form>
    </div>
</section>
@endsection
