@extends('layouts.app')

@section('content')
<div class="col-lg-8 mx-auto">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title"><i class="mdi mdi-pencil"></i> Edit Status Pesanan</h4>
            <form action="{{ route('orderstatus.update', $orderstatus->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label>Nama Status</label>
                    <input type="text" name="name" class="form-control" value="{{ $orderstatus->name }}" required>
                </div>
                <div class="form-group">
                    <label>Deskripsi</label>
                    <textarea name="description" class="form-control" rows="3" required>{{ $orderstatus->description }}</textarea>
                </div>
                <button type="submit" class="btn btn-success">
                    <i class="mdi mdi-content-save"></i> Simpan
                </button>
                <a href="{{ route('orderstatus.index') }}" class="btn btn-secondary">
                    <i class="mdi mdi-arrow-left"></i> Kembali
                </a>
            </form>
        </div>
    </div>
</div>
@endsection
