@extends('layouts.app')

@section('content')
<div class="col-lg-8 mx-auto">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title"><i class="mdi mdi-plus-box"></i> Tambah Status Pesanan</h4>
            <form action="{{ route('orderstatus.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label>Nama Status</label>
                    <input type="text" name="name" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Deskripsi</label>
                    <textarea name="description" class="form-control" rows="3" required></textarea>
                </div>
                <button type="submit" class="btn btn-success">
                    <i class="mdi mdi-content-save"></i> Simpan
                </button>
                <a href="{{ route('orderstatus.index') }}" class="btn btn-secondary">
                    <i class="mdi mdi-arrow-left"></i> Batal
                </a>
            </form>
        </div>
    </div>
</div>
@endsection
