@extends('layouts.web')

@section('content')
<section id="tracking" class="py-5 bg-light">
    <div class="container">
        <div class="section-header text-center mb-4">
            <h3 class="section-title">Tracking Order</h3>
            <p>Masukkan nomor pelacakan Anda untuk melihat status pesanan Anda.</p>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <form action="{{ route('landing.tracking') }}" method="GET" class="form-group d-flex">
                    <input type="text" name="tracking_number" class="form-control me-2" placeholder="Nomor Pelacakan" required>
                    <button type="submit" class="btn btn-primary">Lacak</button>
                </form>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-12">
                @if(isset($trackingStatus))
                <div class="tracking-result bg-white p-4 rounded shadow">
                    <h5 class="mb-3">Status Pesanan</h5>
                    <p><strong>Nomor: </strong>{{ $trackingNumber }}</p>
                    <p><strong>Status: </strong>{{ $trackingStatus }}</p>
                    <p><strong>Detail: </strong>{{ $trackingDetails }}</p>
                </div>
                @endif
            </div>
        </div>
    </div>
</section>
@endsection
