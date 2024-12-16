<?php

namespace App\Http\Controllers;

use App\Models\Rating;
use App\Models\Order;
use Illuminate\Http\Request;

class RatingController extends Controller
{
    public function index()
    {
        $ratings = Rating::all();
        return view('ratings.index', compact('ratings'));
    }

    public function create()
    {
        $orders = Order::all();
        return view('ratings.create', compact('orders'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'order_id' => 'required|exists:orders,id',
            'stars' => 'required|integer|min:1|max:5',
            'comment' => 'nullable|string',
        ]);

        Rating::create($validated);

        return redirect()->route('ratings.index');
    }

    public function show(Rating $rating)
    {
        return view('ratings.show', compact('rating'));
    }

    public function edit(Rating $rating)
    {
        $orders = Order::all();
        return view('ratings.edit', compact('rating', 'orders'));
    }

    public function update(Request $request, Rating $rating)
    {
        $validated = $request->validate([
            'order_id' => 'required|exists:orders,id',
            'stars' => 'required|integer|min:1|max:5',
            'comment' => 'nullable|string',
        ]);

        $rating->update($validated);

        return redirect()->route('ratings.index');
    }

    public function destroy(Rating $rating)
    {
        $rating->delete();
        return redirect()->route('ratings.index');
    }
}

