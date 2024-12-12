<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderFeedback;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function showTrackingForm()
    {
        return view('orders.track');
    }

    public function trackOrder(Request $request)
    {
        $request->validate(['tracking_number' => 'required|string']);
        $order = Order::where('tracking_number', $request->tracking_number)->first();

        if (!$order) {
            return redirect()->back()->with('error', 'Tracking number not found');
        }

        return view('orders.status', compact('order'));
    }

    public function submitFeedback(Request $request, Order $order)
    {
        $request->validate([
            'rating' => 'required|integer|min:1|max:5',
            'comment' => 'required|string|max:1000',
        ]);

        if ($order->status !== 'delivered') {
            return redirect()->back()->with('error', 'Feedback can only be submitted for delivered orders');
        }

        OrderFeedback::create([
            'order_id' => $order->id,
            'rating' => $request->rating,
            'comment' => $request->comment,
        ]);

        return redirect()->back()->with('success', 'Feedback submitted successfully');
    }
}