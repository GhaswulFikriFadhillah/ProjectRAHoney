@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Pesanan</h1>
    <form action="{{ route('orders.update', $order->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="customer_name" class="form-label">Nama Pelanggan</label>
            <input type="text" name="customer_name" id="customer_name" class="form-control" value="{{ $order->customer_name }}" required>
        </div>

        <div class="mb-3">
            <label for="customer_phone" class="form-label">Nomor Telepon</label>
            <input type="text" name="customer_phone" id="customer_phone" class="form-control" value="{{ $order->customer_phone }}" required>
        </div>

        <div class="mb-3">
            <label for="product_id" class="form-label">Produk</label>
            <select name="product_id" id="product_id" class="form-control" required>
                @foreach($products as $product)
                <option value="{{ $product->id }}" {{ $order->product_id == $product->id ? 'selected' : '' }}>
                    {{ $product->name }}
                </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="tracking_number" class="form-label">Nomor Resi</label>
            <input type="text" name="tracking_number" id="tracking_number" class="form-control" value="{{ $order->tracking_number }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        <a href="{{ route('orders.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
