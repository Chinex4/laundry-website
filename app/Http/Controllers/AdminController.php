<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use \App\Models\Booking;

class AdminController extends Controller
{
    //
    public function dashboard()
    {
        $bookings = Booking::latest()->paginate(10);
        $user = Auth::user();
        return view('admin.pages.dashboard', compact('bookings', 'user'));
    }
    public function bookings()
    {
        $bookings = Booking::latest()->paginate(10);
        $user = Auth::user();
        return view('admin.pages.bookings', compact('bookings', 'user'));
    }
    public function deleteBooking($id)
    {
        $booking = Booking::find($id);
        $booking->delete();
        // Alert::success('Booking Deleted Successfully', 'Category Removed.');
        return redirect()->route('admin.bookings')->with('message', 'Category Removed Successfully');
    }
}
