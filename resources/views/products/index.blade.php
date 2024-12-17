@extends('layouts.app')

@section('content')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title"><i class="mdi mdi-cube-outline"></i> Daftar Produk</h4>
            <a href="{{ route('products.create') }}" class="btn btn-primary mb-3">
                <i class="mdi mdi-plus"></i> Tambah Produk
            </a>
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama Produk</th>
                            <th>Deskripsi</th>
                            <th>Harga</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->description }}</td>
                            <td>{{ number_format($product->price, 0, ',', '.') }}</td>
                            <td>
                                <a href="{{ route('products.show', $product->id) }}" class="btn btn-info btn-sm">
                                    <i class="mdi mdi-eye"></i> Detail
                                </a>
                                <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning btn-sm">
                                    <i class="mdi mdi-pencil"></i> Edit
                                </a>
                                <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Hapus produk ini?')">
                                        <i class="mdi mdi-delete"></i> Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
