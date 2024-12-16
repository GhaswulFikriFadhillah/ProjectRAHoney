@extends('layouts.app')

@section('title', 'Add New Product')

@section('content')
<h1 class="mt-5">Add New Product</h1>
<form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="name">Product Name</label>
        <input type="text" name="name" id="name" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <textarea name="description" id="description" class="form-control" required></textarea>
    </div>
    <div class="form-group">
        <label for="price">Price</label>
        <input type="number" name="price" id="price" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="weight">Weight (gram)</label>
        <input type="number" name="weight" id="weight" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="packaging">Packaging</label>
        <select name="packaging" id="packaging" class="form-control" required>
            <option value="Botol">Botol</option>
            <option value="Pouch">Pouch</option>
            <option value="Jerigen">Jerigen</option>
        </select>
    </div>
    <div class="form-group">
        <label for="image">Product Image</label>
        <input type="file" name="image" id="image" class="form-control-file">
    </div>
    <div class="form-group">
        <label for="is_active">Status</label>
        <select name="is_active" id="is_active" class="form-control">
            <option value="1">Active</option>
            <option value="0">Inactive</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Add Product</button>
</form>
@endsection