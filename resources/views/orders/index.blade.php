@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Pesanan</h1>
    <a href="{{ route('orders.create') }}" class="btn btn-primary mb-3">Tambah Pesanan</a>
    
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Nama Pelanggan</th>
                <th>Produk</th>
                <th>Nomor Telepon</th>
                <th>Nomor Resi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($orders as $order)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $order->customer_name }}</td>
                <td>{{ $order->product->name }}</td>
                <td>{{ $order->customer_phone }}</td>
                <td>{{ $order->tracking_number }}</td>
                <td>
                    <a href="{{ route('orders.show', $order->id) }}" class="btn btn-info btn-sm">Detail</a>
                    <a href="{{ route('orders.edit', $order->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('orders.destroy', $order->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Hapus pesanan ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
