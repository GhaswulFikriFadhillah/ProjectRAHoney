@extends('layouts.app')

@section('content')
<div class="col-lg-8 mx-auto">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title"><i class="mdi mdi-cube"></i> Detail Produk</h4>
            <table class="table table-striped">
                <tr>
                    <th>Nama Produk</th>
                    <td>{{ $product->name }}</td>
                </tr>
                <tr>
                    <th>Deskripsi</th>
                    <td>{{ $product->description }}</td>
                </tr>
                <tr>
                    <th>Harga</th>
                    <td>{{ number_format($product->price, 0, ',', '.') }}</td>
                </tr>
            </table>
            <a href="{{ route('products.index') }}" class="btn btn-secondary mt-3">
                <i class="mdi mdi-arrow-left"></i> Kembali
            </a>
        </div>
    </div>
</div>
@endsection
