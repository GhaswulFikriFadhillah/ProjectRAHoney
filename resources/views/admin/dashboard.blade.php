@extends('layouts.admin')

@section('title', 'Dashboard Admin')

@section('content')
<div class="container-fluid page-body-wrapper">
  <h4>Dashboard Admin</h4>
  <div class="row">
    <div class="col-md-3">
      <div class="card bg-info text-white">
        <div class="card-body">
          <h5>Total Produk</h5>
          <p>{{ $totalProducts }}</p>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card bg-success text-white">
        <div class="card-body">
          <h5>Total Pesanan</h5>
          <p>{{ $totalOrders }}</p>
        </div>
      </div>
    </div>
    <!-- Add more cards for other stats -->
  </div>
</div>
@endsection
