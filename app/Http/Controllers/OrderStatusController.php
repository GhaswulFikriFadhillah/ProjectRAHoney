<?php

namespace App\Http\Controllers;

use App\Models\OrderStatus;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderStatusController extends Controller
{
    // Menampilkan semua status pesanan
    public function index()
    {
        $statuses = OrderStatus::all();
        return view('orders-status.index', compact('statuses'));
    }

    // Menampilkan form untuk membuat status pesanan baru
    public function create()
    {
        $orders = Order::all();
        return view('orders-status.create', compact('orders'));
    }

    // Menyimpan status pesanan baru
    public function store(Request $request)
    {
        $validated = $request->validate([
            'order_id' => 'required|exists:orders,id',
            'status' => 'required|string|max:255',
        ]);

        OrderStatus::create($validated);

        return redirect()->route('orders-status.index')->with('success', 'Status updated successfully!');
    }

    // Menampilkan form untuk mengedit status pesanan
    public function edit(OrderStatus $status)
    {
        $orders = Order::all();
        return view('orders-status.edit', compact('status', 'orders'));
    }

    // Memperbarui status pesanan
    public function update(Request $request, OrderStatus $status)
    {
        $validated = $request->validate([
            'order_id' => 'required|exists:orders,id',
            'status' => 'required|string|max:255',
        ]);

        $status->update($validated);

        return redirect()->route('orders-status.index')->with('success', 'Status updated successfully!');
    }

    // Menghapus status pesanan
    public function destroy(OrderStatus $status)
    {
        $status->delete();
        return redirect()->route('orders-status.index')->with('success', 'Status deleted successfully!');
    }
}
