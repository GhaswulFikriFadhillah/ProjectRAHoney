@extends('layouts.app')

@section('content')
<div class="col-lg-8 mx-auto">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title"><i class="mdi mdi-file-document"></i> Detail Status Pesanan</h4>
            <table class="table table-striped">
                <tr>
                    <th>Nama Status</th>
                    <td>{{ $orderstatus->name }}</td>
                </tr>
                <tr>
                    <th>Deskripsi</th>
                    <td>{{ $orderstatus->description }}</td>
                </tr>
            </table>
            <a href="{{ route('orderstatus.index') }}" class="btn btn-secondary mt-3">
                <i class="mdi mdi-arrow-left"></i> Kembali
            </a>
        </div>
    </div>
</div>
@endsection
