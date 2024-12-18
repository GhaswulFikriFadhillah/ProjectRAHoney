<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Order;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    // Halaman utama Landing Page
    public function index()
    {
        return view('landing.home.index');
    }

    // Daftar semua produk untuk Landing Page
    public function productIndex()
    {
        $products = Product::all(); // Mengambil semua produk
        return view('landing.products.index', compact('products'));
    }

    // Detail produk berdasarkan ID
    public function productShow(Product $product)
    {
        return view('landing.products.show', compact('product'));
    }

    // Halaman pelacakan pesanan
    public function trackOrder()
    {
        return view('landing.orders.track');
    }

    // Halaman untuk memberi rating
    public function createRating()
    {
        return view('landing.ratings.create');
    }
}
