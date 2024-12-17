@extends('layouts.app')

@section('content')
<div class="col-lg-8 mx-auto">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title"><i class="mdi mdi-pencil"></i> Edit Pesanan</h4>
            <form action="{{ route('orders.update', $order->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label>Nama Pelanggan</label>
                    <input type="text" name="customer_name" class="form-control" value="{{ $order->customer_name }}" required>
                </div>
                <div class="form-group">
                    <label>Produk</label>
                    <select name="product_id" class="form-control">
                        @foreach ($products as $product)
                        <option value="{{ $product->id }}" {{ $order->product_id == $product->id ? 'selected' : '' }}>
                            {{ $product->name }}
                        </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Status</label>
                    <select name="order_status_id" class="form-control">
                        @foreach ($statuses as $status)
                        <option value="{{ $status->id }}" {{ $order->order_status_id == $status->id ? 'selected' : '' }}>
                            {{ $status->name }}
                        </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Nomor Resi</label>
                    <input type="text" name="tracking_number" class="form-control" value="{{ $order->tracking_number }}" required>
                </div>
                <button type="submit" class="btn btn-success">
                    <i class="mdi mdi-content-save"></i> Simpan
                </button>
                <a href="{{ route('orders.index') }}" class="btn btn-secondary">
                    <i class="mdi mdi-arrow-left"></i> Kembali
                </a>
            </form>
        </div>
    </div>
</div>
@endsection
