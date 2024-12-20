<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    // Menampilkan semua pesanan
    public function index()
    {
        $orders = Order::with('product')->get();
        return view('orders.index', compact('orders'));
    }

    // Menampilkan form untuk membuat pesanan baru
    public function create()
    {
        $products = Product::all();
        return view('orders.create', compact('products'));
    }

    // Menyimpan pesanan baru
    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'customer_name' => 'required|string|max:255',
            'customer_phone' => 'required|string|max:20',
            'tracking_number' => 'required|string|unique:orders,tracking_number',
        ]);

        Order::create([
            'product_id' => $request->product_id,
            'customer_name' => $request->customer_name,
            'customer_phone' => $request->customer_phone,
            'tracking_number' => $request->tracking_number,
        ]);

        return redirect()->route('orders.index')->with('success', 'Order created successfully!');
    }

    // Menampilkan form untuk mengedit pesanan
    public function edit(Order $order)
    {
        $products = Product::all();
        return view('orders.edit', compact('order', 'products'));
    }

    // Memperbarui pesanan yang ada
    public function update(Request $request, Order $order)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'customer_name' => 'required|string|max:255',
            'customer_phone' => 'required|string|max:20',
            'tracking_number' => 'required|string|unique:orders,tracking_number,' . $order->id,
        ]);

        $order->update([
            'product_id' => $request->product_id,
            'customer_name' => $request->customer_name,
            'customer_phone' => $request->customer_phone,
            'tracking_number' => $request->tracking_number,
        ]);

        return redirect()->route('orders.index')->with('success', 'Order updated successfully!');
    }
    public function trackOrder(Request $request)
    {
        $trackingNumber = $request->input('tracking_number');
        $trackingStatus = "Dalam Proses"; // Contoh status
        $trackingDetails = "Pesanan Anda sedang diproses di gudang.";
    
        return view('landing.tracking.index', [
            'trackingNumber' => $trackingNumber,
            'trackingStatus' => $trackingStatus,
            'trackingDetails' => $trackingDetails,
        ]);
    }
    

    // Menghapus pesanan
    public function destroy(Order $order)
    {
        $order->delete();
        return redirect()->route('orders.index')->with('success', 'Order deleted successfully!');
    }
}
