<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Admin: Menampilkan semua produk
    public function index()
    {
        $products = Product::all();
        return view('admin.products.index', compact('products'));
    }

    // Admin: Tambah produk
    public function create()
    {
        return view('admin.products.create');
    }

    // Admin: Simpan produk
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required',
            'price' => 'required|numeric',
        ]);

        Product::create($request->all());

        return redirect()->route('products.index');
    }

    // Landing Page: Daftar produk
    public function show(Product $product)
    {
        return view('landingpage.products.show', compact('product'));
    }
}
