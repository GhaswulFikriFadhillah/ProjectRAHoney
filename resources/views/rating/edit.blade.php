@extends('layouts.app')

@section('content')
<div class="col-lg-8 mx-auto">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title"><i class="mdi mdi-pencil"></i> Edit Rating</h4>
            <form action="{{ route('ratings.update', $rating->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label>Produk</label>
                    <select name="product_id" class="form-control" required>
                        @foreach ($products as $product)
                        <option value="{{ $product->id }}" {{ $rating->product_id == $product->id ? 'selected' : '' }}>
                            {{ $product->name }}
                        </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Pelanggan</label>
                    <select name="user_id" class="form-control" required>
                        @foreach ($users as $user)
                        <option value="{{ $user->id }}" {{ $rating->user_id == $user->id ? 'selected' : '' }}>
                            {{ $user->name }}
                        </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Rating (1-5)</label>
                    <input type="number" name="stars" class="form-control" min="1" max="5" value="{{ $rating->stars }}" required>
                </div>
                <div class="form-group">
                    <label>Ulasan</label>
                    <textarea name="review" class="form-control" rows="3">{{ $rating->review }}</textarea>
                </div>
                <button type="submit" class="btn btn-success">
                    <i class="mdi mdi-content-save"></i> Simpan Rating
                </button>
                <a href="{{ route('ratings.index') }}" class="btn btn-secondary">
                    <i class="mdi mdi-arrow-left"></i> Batal
                </a>
            </form>
        </div>
    </div>
</div>
@endsection
