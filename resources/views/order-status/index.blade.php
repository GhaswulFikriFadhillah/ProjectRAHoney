@extends('layouts.admin')

@section('content')
<div class="card">
  <div class="card-body">
    <p class="card-title">Order Status Management</p>
    <div class="table-responsive">
      <table class="table table-striped table-borderless">
        <thead>
          <tr>
            <th>Status Name</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach($statuses as $status)
          <tr>
            <td>{{ $status->name }}</td>
            <td>
              <a href="{{ route('orders-status.edit', $status->id) }}" class="btn btn-warning">Edit</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection
