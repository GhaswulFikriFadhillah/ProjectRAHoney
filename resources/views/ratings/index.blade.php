@extends('layouts.admin')

@section('content')
<div class="card">
  <div class="card-body">
    <p class="card-title">Product Ratings</p>
    <div class="table-responsive">
      <table class="table table-striped table-borderless">
        <thead>
          <tr>
            <th>Product Name</th>
            <th>Rating</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach($ratings as $rating)
          <tr>
            <td>{{ $rating->product->name }}</td>
            <td>{{ $rating->rating }}</td>
            <td>
              <a href="{{ route('admin.ratings.edit', $rating->id) }}" class="btn btn-warning">Edit</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection
