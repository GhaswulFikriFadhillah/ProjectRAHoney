@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="card-header">
        <h4>Edit Rating</h4>
    </div>
    <div class="card-body">
        <form action="{{ route('ratings.update', $rating) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="order_id">Pesanan</label>
                <select name="order_id" id="order_id" class="form-control" required>
                    <option value="">Pilih Pesanan</option>
                    @foreach($orders as $order)
                        <option value="{{ $order->id }}" {{ $rating->order_id == $order->id ? 'selected' : '' }}>{{ $order->id }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="stars">Bintang</label>
                <input type="number" name="stars" id="stars" class="form-control" min="1" max="5" value="{{ $rating->stars }}" required>
            </div>
            <div class="form-group">
                <label for="comment">Komentar</label>
                <textarea name="comment" id="comment" class="form-control">{{ $rating->comment }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        </form>
    </div>
</div>
@endsection
