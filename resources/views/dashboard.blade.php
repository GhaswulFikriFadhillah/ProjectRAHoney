@extends('layouts.admin')

@section('content')
    <h3 class="font-weight-bold">Welcome {{ Auth::user()->name }}</h3>
    <h6 class="font-weight-normal mb-0">All systems are running smoothly!</h6>

    <!-- Tabel Produk -->
    <div class="row">
        <div class="col-md-6 mb-6 stretch-card transparent">
            <div class="card card-tale">
                <div class="card-body">
                    <p class="mb-4">Today’s Bookings</p>
                    <p class="fs-30 mb-2">4006</p>
                </div>
            </div>
        </div>
        <div class="col-md-6 mb-6 stretch-card transparent">
            <div class="card card-dark-blue">
                <div class="card-body">
                    <p class="mb-4">Total Bookings</p>
                    <p class="fs-30 mb-2">61344</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4>Product List</h4>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($products as $product)
                                    <tr>
                                        <td>{{ $product->name }}</td>
                                        <td>{{ $product->description }}</td>
                                        <td>{{ $product->price }}</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4" class="text-center">No products found</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <!-- Pagination -->
                    <div class="mt-3">
                        {{ $products->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
