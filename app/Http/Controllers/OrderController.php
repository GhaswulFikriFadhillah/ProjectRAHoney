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
        return view('admin.orders.index', compact('orders'));
    }

    public function create()
    {
        $products = Product::all();
        return view('admin.orders.create', compact('products'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'customer_name' => 'required|string|max:255',
            'customer_phone' => 'required|string|max:20',
            'tracking_number' => 'required|string|unique:orders,tracking_number',
        ]);

        Order::create($request->all());

        return redirect()->route('orders.index');
    }
}
