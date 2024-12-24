@extends('layouts.admin')

@section('content')
<div class="card">
  <div class="card-body">
      <h3>Rating List</h3>
    </div>
    <div class="card-body">
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div class="table-responsive">
          <table class="table table-striped table-borderless">
            <thead>
                <tr>
                    <th>Pesanan</th>
                    <th>Bintang</th>
                    <th>Komentar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($ratings as $rating)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $rating->order->id }}</td>
                    <td>{{ $rating->stars }}</td>
                    <td>{{ $rating->comment }}</td>
                    <td>
                        <a href="{{ route('ratings.edit', $rating) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('ratings.destroy', $rating) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        </div>
    </div>
</div>
@endsection
