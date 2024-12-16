@extends('layouts.app')

@section('title', 'Order Statistics')

@section('content')
<h1 class="mt-5">Order Statistics</h1>

<div class="row">
    <div class="col-md-6">
        <h3>Monthly Statistics</h3>
        <table class="table">
            <thead>
                <tr>
                    <th>Month</th>
                    <th>Total Orders</th>
                    <th>Total Revenue</th>
                </tr>
            </thead>
            <tbody>
                @foreach($monthlyStats as $stat)
                <tr>
                    <td>{{ $stat->month }}</td>
                    <td>{{ $stat->total_orders }}</td>
                    <td>Rp {{ number_format($stat->total_revenue, 0, ',', '.') }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="col-md-6">
        <h3>Yearly Statistics</h3>
        <table class="table">
            <thead>
                <tr>
                    <th>Year</th>
                    <th>Total Orders</th>
                    <th>Total Revenue</th>
                </tr>
            </thead>
            <tbody>
                @foreach($yearlyStats as $stat)
                <tr>
                    <td>{{ $stat->year }}</td>
                    <td>{{ $stat->total_orders }}</td>
                    <td>Rp {{ number_format($stat->total_revenue, 0, ',', '.') }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection