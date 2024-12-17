@extends('layouts.app')

@section('content')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title"><i class="mdi mdi-star"></i> Daftar Rating</h4>
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Produk</th>
                            <th>Pelanggan</th>
                            <th>Rating</th>
                            <th>Ulasan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($ratings as $rating)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $rating->product->name }}</td>
                            <td>{{ $rating->user->name }}</td>
                            <td>{{ $rating->stars }}</td>
                            <td>{{ $rating->review }}</td>
                            <td>
                                <a href="{{ route('ratings.show', $rating->id) }}" class="btn btn-info btn-sm">
                                    <i class="mdi mdi-eye"></i> Detail
                                </a>
                                <a href="{{ route('ratings.edit', $rating->id) }}" class="btn btn-warning btn-sm">
                                    <i class="mdi mdi-pencil"></i> Edit
                                </a>
                                <form action="{{ route('ratings.destroy', $rating->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Hapus rating ini?')">
                                        <i class="mdi mdi-delete"></i> Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
