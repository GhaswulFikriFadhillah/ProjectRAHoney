@extends('layouts.web')

@section('content')
<section class="feedback py-5">
    <div class="container">
        <h3 class="text-center">Give Your Feedback</h3>
        <form action="{{ route('ratings.store') }}" method="POST" class="form-group">
            @csrf
            <div class="mb-3">
                <label for="product_id" class="form-label">Product</label>
                <select name="product_id" class="form-control">
                    @foreach($products as $product)
                    <option value="{{ $product->id }}">{{ $product->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="rating" class="form-label">Rating</label>
                <input type="number" name="rating" min="1" max="5" class="form-control">
            </div>
            <div class="mb-3">
                <label for="comment" class="form-label">Comment</label>
                <textarea name="comment" class="form-control"></textarea>
            </div>
            <button type="submit" class="btn btn-dark">Submit Feedback</button>
        </form>
    </div>
</section>
@endsection
