@extends('layouts.admin')

@section('title', 'Daftar Pesanan')

@section('content')
<div class="container-fluid page-body-wrapper">
  <h4>Daftar Pesanan</h4>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>ID Pesanan</th>
        <th>Nama Pembeli</th>
        <th>Status</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      @foreach($orders as $order)
        <tr>
          <td>{{ $order->id }}</td>
          <td>{{ $order->customer_name }}</td>
          <td>{{ $order->status->name }}</td>
          <td>
            <a href="{{ route('orders.show', $order->id) }}" class="btn btn-info btn-sm">Detail</a>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection
