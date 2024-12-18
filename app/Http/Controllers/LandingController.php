<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Order;
use App\Models\Rating;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    // Menampilkan produk unggulan di halaman utama
    public function index()
    {
        $products = Product::latest()->take(5)->get(); // Menampilkan 5 produk terbaru
        return view('landing.home.index', compact('products'));
    }

    // Menampilkan daftar produk di halaman publik
    public function products()
    {
        $products = Product::all();
        return view('landing.products.index', compact('products'));
    }

    // Menampilkan detail produk di halaman publik
    public function showProduct(Product $product)
    {
        return view('landing.products.show', compact('product'));
    }

    // Halaman untuk melacak status pesanan
    public function trackOrder()
    {
        return view('landing.orders.track');
    }

    // Menyimpan rating untuk produk
    public function storeRating(Request $request)
    {
        $validated = $request->validate([
            'order_id' => 'required|exists:orders,id',
            'stars' => 'required|integer|min:1|max:5',
            'comment' => 'nullable|string',
        ]);

        Rating::create($validated);

        return redirect()->route('landing.products.index');
    }
}
