@extends('layouts.admin')

@section('title', 'Daftar Ulasan dan Rating')

@section('content')
<div class="container-fluid page-body-wrapper">
  <h4>Daftar Ulasan dan Rating</h4>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>ID Ulasan</th>
        <th>Nama Produk</th>
        <th>Rating</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      @foreach($ratings as $rating)
        <tr>
          <td>{{ $rating->id }}</td>
          <td>{{ $rating->product->name }}</td>
          <td>{{ $rating->rating }}</td>
          <td>
            <a href="{{ route('ratings.show', $rating->id) }}" class="btn btn-info btn-sm">Detail</a>
            <a href="{{ route('ratings.edit', $rating->id) }}" class="btn btn-warning btn-sm">Edit</a>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection
