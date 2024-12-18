@extends('layouts.admin')

@section('content')
<div class="card">
  <div class="card-body">
    <p class="card-title">Edit Order Status</p>
    <form action="{{ route('admin.order-status.update', $status->id) }}" method="POST">
      @csrf
      @method('PUT')
      <div class="form-group">
        <label for="name">Status Name</label>
        <input type="text" class="form-control" id="name" name="name" value="{{ $status->name }}" required>
      </div>
      <button type="submit" class="btn btn-primary">Update</button>
    </form>
  </div>
</div>
@endsection
