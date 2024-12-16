<?php

namespace App\Http\Controllers;

use App\Models\OrderStatus;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderStatusController extends Controller
{
    public function index()
    {
        $statuses = OrderStatus::all();
        return view('order-status.index', compact('statuses'));
    }

    public function create()
    {
        $orders = Order::all();
        return view('order-status.create', compact('orders'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'order_id' => 'required|exists:orders,id',
            'status' => 'required|string|max:255',
        ]);

        OrderStatus::create($validated);

        return redirect()->route('order-status.index');
    }

    public function show(OrderStatus $status)
    {
        return view('order-status.show', compact('status'));
    }

    public function edit(OrderStatus $status)
    {
        $orders = Order::all();
        return view('order-status.edit', compact('status', 'orders'));
    }

    public function update(Request $request, OrderStatus $status)
    {
        $validated = $request->validate([
            'order_id' => 'required|exists:orders,id',
            'status' => 'required|string|max:255',
        ]);

        $status->update($validated);

        return redirect()->route('order-status.index');
    }

    public function destroy(OrderStatus $status)
    {
        $status->delete();
        return redirect()->route('order-status.index');
    }
}

