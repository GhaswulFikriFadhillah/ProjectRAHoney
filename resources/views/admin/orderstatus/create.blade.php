@extends('layouts.admin')

@section('title', 'Tambah Status Pesanan')

@section('content')
<div class="container-fluid page-body-wrapper">
  <h4>Tambah Status Pesanan</h4>
  <form action="{{ route('orderstatus.store') }}" method="POST">
    @csrf
    <div class="mb-3">
      <label for="name" class="form-label">Nama Status</label>
      <input type="text" name="name" id="name" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-primary">Tambah Status</button>
  </form>
</div>
@endsection
