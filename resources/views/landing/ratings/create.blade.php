@extends('layouts.landing')

@section('content')
<div class="container my-5">
    <h2>Beri Rating</h2>
    <form action="{{ route('ratings.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="order_id">Pesanan</label>
            <select name="order_id" id="order_id" class="form-control" required>
                <option value="">Pilih Pesanan</option>
                @foreach($orders as $order)
                    <option value="{{ $order->id }}">{{ $order->id }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="stars">Bintang</label>
            <input type="number" name="stars" id="stars" class="form-control" min="1" max="5" required>
        </div>
        <div class="form-group">
            <label for="comment">Komentar</label>
            <textarea name="comment" id="comment" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Kirim Rating</button>
    </form>
</div>
@endsection
