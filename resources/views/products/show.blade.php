@extends('layouts.web')

@section('content')
<section class="product-detail py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="{{ $product->image }}" alt="{{ $product->name }}" class="img-fluid">
            </div>
            <div class="col-md-6">
                <h2>{{ $product->name }}</h2>
                <p>{{ $product->description }}</p>
                <p><strong>Price: </strong>${{ $product->price }}</p>
                <a href="https://wa.me/62895705049191" class="btn btn-dark">Order Now via WhatsApp</a>
            </div>
        </div>
    </div>
</section>
@endsection
