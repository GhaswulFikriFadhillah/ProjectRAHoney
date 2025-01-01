<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Models\OrderStatus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::with('product')->get();
        $statuses = OrderStatus::pluck('status', 'id'); // Ambil semua status

        return view('orders.index', compact('orders', 'statuses'));
    }

    public function create()
    {
        $products = Product::all();
        $statuses = OrderStatus::pluck('status', 'id'); // Ambil semua status

        return view('orders.create', compact('products', 'statuses'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'customer_name' => 'required|string|max:255',
            'customer_phone' => 'required|string|max:20',
            'tracking_number' => 'required|string|unique:orders,tracking_number',
            'status_id' => 'required|exists:order_status,id',
        ]);

        DB::beginTransaction();
        try {
            // Buat order baru
            $order = Order::create([
                'product_id' => $request->product_id,
                'customer_name' => $request->customer_name,
                'customer_phone' => $request->customer_phone,
                'tracking_number' => $request->tracking_number,
            ]);

            // Simpan status ke tabel `order_status`
            DB::table('order_status')->insert([
                'id' => $order->id,
                'status' => OrderStatus::find($request->status_id)->status,
            ]);

            DB::commit();
            return redirect()->route('orders.index')->with('success', 'Order created successfully!');
        } catch (\Exception $e) {
            DB::rollback();
            return back()->with('error', 'Failed to create order. ' . $e->getMessage());
        }
    }


    public function show(Order $order)
    {
        // Ambil status dari tabel `order_status`
        $orders = Order::with('product')->get();
        $status = DB::table('order_status')->where('id', $order->id)->value('status');

        return view('orders.show', compact('order', 'status', 'orders'));
    }


    public function edit(Order $order)
    {
        $products = Product::all();
        $statuses = OrderStatus::pluck('status', 'id');

        return view('orders.edit', compact('order', 'products', 'statuses'));
    }

    public function update(Request $request, Order $order)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'customer_name' => 'required|string|max:255',
            'customer_phone' => 'required|string|max:20',
            'tracking_number' => 'required|string|unique:orders,tracking_number,',
            'status_id' => 'required|exists:order_status,id',
        ]);

        DB::beginTransaction();
        try {
            // Perbarui data order
            $order->update([
                'product_id' => $request->product_id,
                'customer_name' => $request->customer_name,
                'customer_phone' => $request->customer_phone,
                'tracking_number' => $request->tracking_number,
            ]);

            // Perbarui status di tabel `order_status`
            DB::table('order_status')->where('id', $order->id)->update([
                'status' => OrderStatus::find($request->status_id)->status,
            ]);

            DB::commit();
            return redirect()->route('orders.index')->with('success', 'Order updated successfully!');
        } catch (\Exception $e) {
            DB::rollback();
            return back()->with('error', 'Failed to update order. ' . $e->getMessage());
        }
    }

    public function track(Request $request)
    {
        if ($request->isMethod('post')) {
            $trackingNumber = $request->input('tracking_number');
            $order = Order::with('product')->where('tracking_number', $trackingNumber)->first();

            if (!$order) {
                return back()->with('error', 'Order not found');
            }

            // Ambil status dari tabel `order_status`
            $status = DB::table('order_status')->where('id', $order->id)->value('status');

            return view('orders.track', [
                'order' => $order,
                'trackingStatus' => $status ?? 'Pending',
            ]);
        }

        // Tampilkan halaman kosong untuk tracking
        return view('orders.track');
    }
    public function destroy(Order $order)
{
    DB::beginTransaction();
    try {
        // Hapus status dari tabel `order_status`
        DB::table('order_status')->where('id', $order->id)->delete();

        // Hapus order dari tabel `orders`
        $order->delete();

        DB::commit();
        return redirect()->route('orders.index')->with('success', 'Order deleted successfully!');
    } catch (\Exception $e) {
        DB::rollback();
        return back()->with('error', 'Failed to delete order. ' . $e->getMessage());
    }
}

}
