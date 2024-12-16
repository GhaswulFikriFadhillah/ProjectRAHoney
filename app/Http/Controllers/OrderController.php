<?php
namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::with('product')->get();
        return view('orders.index', compact('orders'));
    }

    public function create()
    {
        $products = Product::where('stock', '>', 0)->get();
        return view('orders.create', compact('products'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'product_id' => 'required|exists:products,id',
            'customer_name' => 'required|string|max:255',
            'customer_phone' => 'required|string|max:20'
        ]);

        // Cek stok produk
        $product = Product::findOrFail($validatedData['product_id']);
        if ($product->stock < 1) {
            return back()->with('error', 'Produk habis');
        }

        // Kurangi stok
        $product->decrement('stock');

        // Buat pesanan
        $validatedData['tracking_number'] = Order::generateTrackingNumber();
        $validatedData['status'] = Order::STATUS['PENDING'];

        $order = Order::create($validatedData);

        // Generate WhatsApp Link
        $whatsappMessage = urlencode("Halo, saya ingin memesan produk {$product->name} dengan nomor pesanan {$order->tracking_number}");
        $whatsappLink = "https://wa.me/+62895705049191?text={$whatsappMessage}";

        return redirect()->away($whatsappLink);
    }

    public function track(Request $request)
    {
        $trackingNumber = $request->input('tracking_number');
        $order = Order::with('product')
            ->where('tracking_number', $trackingNumber)
            ->first();

        return view('tracking', compact('order'));
    }
}