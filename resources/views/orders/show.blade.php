@extends('layouts.app')

@section('content')
<div class="col-lg-8 mx-auto">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title"><i class="mdi mdi-file-document"></i> Detail Pesanan</h4>
            <table class="table table-striped">
                <tr>
                    <th>Nama Pelanggan</th>
                    <td>{{ $order->customer_name }}</td>
                </tr>
                <tr>
                    <th>Produk</th>
                    <td>{{ $order->product->name }}</td>
                </tr>
                <tr>
                    <th>Status</th>
                    <td>{{ $order->orderStatus->name }}</td>
                </tr>
                <tr>
                    <th>Nomor Resi</th>
                    <td>{{ $order->tracking_number }}</td>
                </tr>
            </table>
            <a href="{{ route('orders.index') }}" class="btn btn-secondary mt-3">
                <i class="mdi mdi-arrow-left"></i> Kembali
            </a>
        </div>
    </div>
</div>
@endsection
