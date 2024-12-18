<?php

namespace App\Http\Controllers;

use App\Models\Rating;
use App\Models\Order;
use Illuminate\Http\Request;

class RatingController extends Controller
{
    // Menampilkan semua rating
    public function index()
    {
        $ratings = Rating::all();
        return view('admin.ratings.index', compact('ratings'));
    }

    // Menampilkan form untuk memberi rating
    public function create()
    {
        $orders = Order::all();
        return view('admin.ratings.create', compact('orders'));
    }

    // Menyimpan rating baru
    public function store(Request $request)
    {
        $validated = $request->validate([
            'order_id' => 'required|exists:orders,id',
            'stars' => 'required|integer|min:1|max:5',
            'comment' => 'nullable|string',
        ]);

        Rating::create($validated);

        return redirect()->route('admin.ratings.index')->with('success', 'Rating added successfully!');
    }

    // Menampilkan rating
    public function show(Rating $rating)
    {
        return view('admin.ratings.show', compact('rating'));
    }

    // Menampilkan form untuk mengedit rating
    public function edit(Rating $rating)
    {
        $orders = Order::all();
        return view('admin.ratings.edit', compact('rating', 'orders'));
    }

    // Memperbarui rating
    public function update(Request $request, Rating $rating)
    {
        $validated = $request->validate([
            'order_id' => 'required|exists:orders,id',
            'stars' => 'required|integer|min:1|max:5',
            'comment' => 'nullable|string',
        ]);

        $rating->update($validated);

        return redirect()->route('admin.ratings.index')->with('success', 'Rating updated successfully!');
    }

    // Menghapus rating
    public function destroy(Rating $rating)
    {
        $rating->delete();
        return redirect()->route('admin.ratings.index')->with('success', 'Rating deleted successfully!');
    }
}
