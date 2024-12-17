@extends('layouts.app')

@section('content')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title"><i class="mdi mdi-clipboard-list-outline"></i> Daftar Pesanan</h4>
            <a href="{{ route('orders.create') }}" class="btn btn-primary mb-3">
                <i class="mdi mdi-plus"></i> Tambah Pesanan
            </a>
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama Pelanggan</th>
                            <th>Produk</th>
                            <th>Status</th>
                            <th>Nomor Resi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders as $order)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $order->customer_name }}</td>
                            <td>{{ $order->product->name }}</td>
                            <td>{{ $order->orderStatus->name }}</td>
                            <td>{{ $order->tracking_number }}</td>
                            <td>
                                <a href="{{ route('orders.show', $order->id) }}" class="btn btn-info btn-sm">
                                    <i class="mdi mdi-eye"></i> Detail
                                </a>
                                <a href="{{ route('orders.edit', $order->id) }}" class="btn btn-warning btn-sm">
                                    <i class="mdi mdi-pencil"></i> Edit
                                </a>
                                <form action="{{ route('orders.destroy', $order->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Hapus pesanan ini?')">
                                        <i class="mdi mdi-delete"></i> Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection