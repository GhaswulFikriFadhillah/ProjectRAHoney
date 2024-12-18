@extends('layouts.admin')

@section('title', 'Tambah Produk')

@section('content')
<div class="container-fluid page-body-wrapper">
  <h4>Tambah Produk Baru</h4>
  <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
      <label for="name" class="form-label">Nama Produk</label>
      <input type="text" name="name" id="name" class="form-control" required>
    </div>
    <div class="mb-3">
      <label for="description" class="form-label">Deskripsi</label>
      <textarea name="description" id="description" class="form-control" rows="4" required></textarea>
    </div>
    <div class="mb-3">
      <label for="price" class="form-label">Harga</label>
      <input type="number" name="price" id="price" class="form-control" required>
    </div>
    <div class="mb-3">
      <label for="stock" class="form-label">Stok</label>
      <input type="number" name="stock" id="stock" class="form-control" required>
    </div>
    <div class="mb-3">
      <label for="image" class="form-label">Gambar Produk</label>
      <input type="file" name="image" id="image" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-primary">Tambah Produk</button>
  </form>
</div>
@endsection
