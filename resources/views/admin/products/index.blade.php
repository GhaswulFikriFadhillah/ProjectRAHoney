@extends('layouts.app')

@section('title', ' Product Management')

@section('content')
<h1 class="mt-5">Product Management</h1>
<a href="{{ route('admin.products.create') }}" class="btn btn-primary mb-3">Add New Product</a>
<table class="table">
    <thead>
        <tr>
            <th>Name</th>
            <th>Price</th>
            <th>Weight</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($products as $product)
        <tr>
            <td>{{ $product->name }}</td>
            <td>Rp {{ number_format($product->price, 0, ',', '.') }}</td>
            <td>{{ $product->weight }} gram</td>
            <td>{{ $product->is_active ? 'Active' : 'Inactive' }}</td>
            <td>
                <a href="{{ route('admin.products.edit', $product) }}" class="btn btn-warning">Edit</a>
                <form action="{{ route('admin.products.destroy', $product) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection