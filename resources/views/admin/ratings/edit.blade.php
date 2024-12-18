@extends('layouts.admin')

@section('title', 'Edit Ulasan')

@section('content')
<div class="container-fluid page-body-wrapper">
  <h4>Edit Ulasan #{{ $rating->id }}</h4>
  <form action="{{ route('ratings.update', $rating->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
      <label for="rating" class="form-label">Rating</label>
      <select name="rating" id="rating" class="form-control" required>
        <option value="1" {{ $rating->rating == 1 ? 'selected' : '' }}>1</option>
        <option value="2" {{ $rating->rating == 2 ? 'selected' : '' }}>2</option>
        <option value="3" {{ $rating->rating == 3 ? 'selected' : '' }}>3</option>
        <option value="4" {{ $rating->rating == 4 ? 'selected' : '' }}>4</option>
        <option value="5" {{ $rating->rating == 5 ? 'selected' : '' }}>5</option>
      </select>
    </div>
    <div class="mb-3">
      <label for="review" class="form-label">Ulasan</label>
      <textarea name="review" id="review" class="form-control" rows="4" required>{{ $rating->review }}</textarea>
    </div>
    <button type="submit" class="btn btn-primary">Update Ulasan</button>
  </form>
</div>
@endsection
