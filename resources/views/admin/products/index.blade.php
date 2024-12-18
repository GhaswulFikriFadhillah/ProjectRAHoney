@extends('layouts.admin')

@section('title', 'Daftar Produk')

@section('content')
<div class="container-fluid page-body-wrapper">
  <h4>Daftar Produk</h4>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>ID Produk</th>
        <th>Nama Produk</th>
        <th>Harga</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      @foreach($products as $product)
        <tr>
          <td>{{ $product->id }}</td>
          <td>{{ $product->name }}</td>
          <td>Rp. {{ number_format($product->price, 0, ',', '.') }}</td>
          <td>
            <a href="{{ route('products.show', $product->id) }}" class="btn btn-info btn-sm">Detail</a>
            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning btn-sm">Edit</a>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection
