@extends('layouts.web')

@section('title', 'Beri Rating')

@section('content')
<div class="container py-5">
  <h2 class="text-center">Beri Rating untuk {{ $product->name }}</h2>
  <form action="{{ route('ratings.store') }}" method="POST">
    @csrf
    <input type="hidden" name="product_id" value="{{ $product->id }}">
    <div class="mb-3">
      <label for="rating" class="form-label">Rating</label>
      <select name="rating" id="rating" class="form-control" required>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
      </select>
    </div>
    <div class="mb-3">
      <label for="review" class="form-label">Ulasan</label>
      <textarea name="review" id="review" class="form-control" rows="4" required></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Kirim Rating</button>
  </form>
</div>
@endsection
