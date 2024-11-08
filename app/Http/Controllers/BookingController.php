<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Booking;

class BookingController extends Controller
{
    //
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string|max:20',
            'item' => 'required|string',
            'quantity' => 'required|integer|min:1',
            'service_type' => 'required|string|in:wash,iron,both',
            'pickup_date' => 'required|date',
            'delivery_date' => 'required|date',
        ]);

        Booking::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'item' => $request->item,
            'quantity' => $request->quantity,
            'service_type' => $request->service_type,
            'pickup_date' => $request->pickup_date,
            'delivery_date' => $request->delivery_date,
            'status' => 'pending',
        ]);

        return redirect()->route('booking')->with('success', 'Booking created successfully!');
    }
}
