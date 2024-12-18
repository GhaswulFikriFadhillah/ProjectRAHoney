@extends('layouts.admin')

@section('title', 'Edit Status Pesanan')

@section('content')
<div class="container-fluid page-body-wrapper">
  <h4>Edit Status Pesanan #{{ $status->id }}</h4>
  <form action="{{ route('orderstatus.update', $status->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
      <label for="name" class="form-label">Nama Status</label>
      <input type="text" name="name" id="name" class="form-control" value="{{ $status->name }}" required>
    </div>
    <button type="submit" class="btn btn-primary">Update Status</button>
  </form>
</div>
@endsection
