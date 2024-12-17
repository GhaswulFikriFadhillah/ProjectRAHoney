@extends('layouts.app')

@section('content')
<div class="col-lg-8 mx-auto">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title"><i class="mdi mdi-star"></i> Detail Rating</h4>
            <table class="table table-striped">
                <tr>
                    <th>Produk</th>
                    <td>{{ $rating->product->name }}</td>
                </tr>
                <tr>
                    <th>Pelanggan</th>
                    <td>{{ $rating->user->name }}</td>
                </tr>
                <tr>
                    <th>Rating</th>
                    <td>{{ $rating->stars }}</td>
                </tr>
                <tr>
                    <th>Ulasan</th>
                    <td>{{ $rating->review }}</td>
                </tr>
            </table>
            <a href="{{ route('ratings.index') }}" class="btn btn-secondary mt-3">
                <i class="mdi mdi-arrow-left"></i> Kembali
            </a>
        </div>
    </div>
</div>
@endsection
