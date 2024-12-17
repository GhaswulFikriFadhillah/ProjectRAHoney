@extends('layouts.app')

@section('content')
<div class="col-lg-8 mx-auto">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title"><i class="mdi mdi-plus-box"></i> Tambah Produk</h4>
            <form action="{{ route('products.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label>Nama Produk</label>
                    <input type="text" name="name" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Deskripsi</label>
                    <textarea name="description" class="form-control" rows="3" required></textarea>
                </div>
                <div class="form-group">
                    <label>Harga</label>
                    <input type="number" name="price" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-success">
                    <i class="mdi mdi-content-save"></i> Simpan
                </button>
                <a href="{{ route('products.index') }}" class="btn btn-secondary">
                    <i class="mdi mdi-arrow-left"></i> Batal
                </a>
            </form>
        </div>
    </div>
</div>
@endsection
