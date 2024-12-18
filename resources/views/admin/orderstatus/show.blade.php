@extends('layouts.admin')

@section('title', 'Detail Status Pesanan')

@section('content')
<div class="container-fluid page-body-wrapper">
  <h4>Detail Status Pesanan #{{ $status->id }}</h4>
  <p><strong>Nama Status:</strong> {{ $status->name }}</p>
</div>
@endsection
