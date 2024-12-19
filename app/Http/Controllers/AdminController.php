<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product; // Import model Product

class AdminController extends Controller
{
    public function index(){
        // Ambil data produk dari database
        $products = Product::latest()->paginate(10); 

        // Kirim data produk ke view dashboard
        return view('dashboard', compact('products'));
    }
}
