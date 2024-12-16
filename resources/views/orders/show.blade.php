@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detail Pesanan</h1>
    <table class="table table-bordered">
        <tr>
            <th>Nama Pelanggan</th>
            <td>{{ $order->customer_name }}</td>
        </tr>
        <tr>
            <th>Nomor Telepon</th>
            <td>{{ $order->customer_phone }}</td>
        </tr>
        <tr>
            <th>Produk</th>
            <td>{{ $order->product->name }}</td>
        </tr>
        <tr>
            <th>Nomor Resi</th>
            <td>{{ $order->tracking_number }}</td>
        </tr>
    </table>
    <a href="{{ route('orders.index') }}" class="btn btn-secondary">Kembali</a>
</div>
@endsection
