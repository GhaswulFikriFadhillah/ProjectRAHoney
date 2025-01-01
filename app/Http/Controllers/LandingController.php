<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    // Halaman utama Landing Page
    public function index()
    {
        return view('landing.home.index');
    }

    // // Daftar semua produk untuk Landing Page
    // public function productIndex()
    // {
    //     $products = Product::all(); // Mengambil semua produk
    //     return view('landing.products.index', compact('products'));
    // }

    // // Detail produk berdasarkan ID
    // public function productShow($id)
    // {
    //     $product = Product::findOrFail($id); // Mengambil produk berdasarkan ID
    //     return view('landing.products.show', compact('product'));
    // }

    
}
