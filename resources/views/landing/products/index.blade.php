@extends('layout.web')

@section('content')
<section class="collection bg-light py-5">
    <div class="container">
        <div class="row">
            <div class="title-xlarge text-uppercase txt-fx domino">Our Products</div>
            @foreach($products as $product)
            <div class="col-md-6">
                <div class="product-item">
                    <div class="image-holder">
                        <img src="{{ $product->image }}" alt="{{ $product->name }}" class="img-fluid">
                    </div>
                    <div class="product-content">
                        <h5>{{ $product->name }}</h5>
                        <p>{{ $product->description }}</p>
                        <a href="{{ route('products.show', $product->id) }}" class="btn btn-dark">View Details</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
