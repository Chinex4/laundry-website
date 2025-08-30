<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use Illuminate\Support\Facades\Mail;
use App\Mail\NewBookingMail;
use RealRashid\SweetAlert\Facades\Alert;
use App\Mail\PaymentProofMail;

class BookingController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'         => 'required|string|max:255',
            'email'        => 'required|email',
            'phone'        => 'required|string|max:20',
            'item'         => 'required|string',
            'quantity'     => 'required|integer|min:1',
            'amount'       => 'required|numeric|min:1',
            'service_type' => 'required|string',
            'pickup_date'  => 'nullable|date',
            'delivery_date'=> 'nullable|date|after_or_equal:pickup_date',
        ]);

        $booking = Booking::create($validated);

        Mail::to("astauchiha234@gmail.com")->send(new NewBookingMail($booking));

        Alert::success('Booking Submitted', 'Please upload proof of payment.');
        return redirect()->route('bookings.payment', $booking->id);
    }

    public function payment(Booking $booking)
    {
        return view('home.pages.bookings.payment', compact('booking'));
    }

    public function uploadPayment(Request $request, Booking $booking)
    {
        $request->validate([
            'payment_proof' => 'required|mimes:jpg,jpeg,png,pdf|max:2048',
        ]);

        $path = $request->file('payment_proof')->store('payment_proofs', 'public');
        $booking->update(['payment_proof' => $path]);

        // Mail::to("elitewashlaundryng@gmail.com")->send(new PaymentProofMail($booking));
        Mail::to("astauchiha234@gmail.com")->send(new PaymentProofMail($booking));

        Alert::success('Payment Uploaded', 'Your proof of payment has been submitted successfully!');
        return redirect()->route('index');
    }
}
