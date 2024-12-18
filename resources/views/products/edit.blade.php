@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1>Edit Product</h1>

        <form action="{{ route('products.update', $product->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="name">Product Name</label>
                <input type="text" name="name" class="form-control" id="name" value="{{ old('name', $product->name) }}" required>
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" class="form-control" id="description" rows="4" required>{{ old('description', $product->description) }}</textarea>
            </div>

            <div class="form-group">
                <label for="price">Price</label>
                <input type="number" name="price" class="form-control" id="price" value="{{ old('price', $product->price) }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Update Product</button>
        </form>
    </div>
@endsection