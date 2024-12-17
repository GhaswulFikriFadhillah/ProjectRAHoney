@extends('layouts.app')

@section('content')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title"><i class="mdi mdi-format-list-bulleted"></i> Daftar Status Pesanan</h4>
            <a href="{{ route('orderstatus.create') }}" class="btn btn-primary mb-3">
                <i class="mdi mdi-plus"></i> Tambah Status
            </a>
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama Status</th>
                            <th>Deskripsi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orderstatuses as $status)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $status->name }}</td>
                            <td>{{ $status->description }}</td>
                            <td>
                                <a href="{{ route('orderstatus.show', $status->id) }}" class="btn btn-info btn-sm">
                                    <i class="mdi mdi-eye"></i> Detail
                                </a>
                                <a href="{{ route('orderstatus.edit', $status->id) }}" class="btn btn-warning btn-sm">
                                    <i class="mdi mdi-pencil"></i> Edit
                                </a>
                                <form action="{{ route('orderstatus.destroy', $status->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Hapus status ini?')">
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
