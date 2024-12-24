<?php

namespace App\Http\Controllers;

use App\Models\Rating;
use App\Models\Order;
use Illuminate\Http\Request;

class RatingController extends Controller
{
    // Menampilkan semua rating (Admin)
    public function index()
    {
        $ratings = Rating::all();
        return view('ratings.index', compact('ratings'));
    }

    // Menampilkan form untuk memberi rating (Landing Page)
    public function create()
    {
        $orders = Order::where('status', 'completed')->get(); // Hanya order yang selesai
        return view('landing.ratings.create', compact('orders'));
    }

    // Menyimpan rating baru (Landing Page)
    public function store(Request $request)
    {
        $validated = $request->validate([
            'order_id' => 'required|exists:orders,id',
            'stars' => 'required|integer|min:1|max:5',
            'comment' => 'nullable|string|max:255',
        ]);

        Rating::create($validated);

        return redirect()->route('landing.ratings.create')->with('success', 'Terima kasih atas rating Anda!');
    }

    // Menampilkan detail rating (Admin)
    public function show(Rating $rating)
    {
        return view('ratings.show', compact('rating'));
    }

    // Menampilkan form untuk mengedit rating (Admin)
    public function edit(Rating $rating)
    {
        $orders = Order::all();
        return view('ratings.edit', compact('rating', 'orders'));
    }

    // Memperbarui rating (Admin)
    public function update(Request $request, Rating $rating)
    {
        $validated = $request->validate([
            'order_id' => 'required|exists:orders,id',
            'stars' => 'required|integer|min:1|max:5',
            'comment' => 'nullable|string|max:255',
        ]);

        $rating->update($validated);

        return redirect()->route('ratings.index')->with('success', 'Rating berhasil diperbarui!');
    }

    // Menghapus rating (Admin)
    public function destroy(Rating $rating)
    {
        $rating->delete();
        return redirect()->route('ratings.index')->with('success', 'Rating berhasil dihapus!');
    }
}
