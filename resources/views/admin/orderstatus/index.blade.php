@extends('layouts.admin')

@section('title', 'Daftar Status Pesanan')

@section('content')
<div class="container-fluid page-body-wrapper">
  <h4>Daftar Status Pesanan</h4>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>ID Status</th>
        <th>Nama Status</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      @foreach($orderStatuses as $status)
        <tr>
          <td>{{ $status->id }}</td>
          <td>{{ $status->name }}</td>
          <td>
            <a href="{{ route('orderstatus.show', $status->id) }}" class="btn btn-info btn-sm">Detail</a>
            <a href="{{ route('orderstatus.edit', $status->id) }}" class="btn btn-warning btn-sm">Edit</a>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection
