<?php

namespace App\Http\Controllers;

use App\Models\Bookings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class BookingsController extends Controller
{
    // FRONTEND
    // Store the booking information
    public function store(Request $request)
    {
        $request->validate([
            'customer_name' => 'required|string',
            'customer_email' => 'required|email',
            'customer_phone' => 'required',
            'pickup_location' => 'required|not_in:0',
            'dropoff_location' => 'required|not_in:0',
            'departure_date' => 'required|date',
        ]);

        Bookings::create($request->all());

        return response()->json(['success' => true, 'message' => 'Đặt xe thành công!']);
    }
    // BACKEND
    // Show all bookings
    public function ShowBookings()
    {
        $bookings = Bookings::orderBy('created_at', 'desc')->get();
        return view('admin.bookings.show_bookings', compact('bookings'));
    }
    public function ShowBookingsDetail($id)
    {
        $booking_detail = Bookings::find($id);
        return view('admin.bookings.detail_bookings', compact('booking_detail'));
    }
    public function SetConfirmed($id)
    {
        $booking = Bookings::find($id);
        $booking->status = 'confirmed';
        $booking->save();
        Session::flash('success', 'Booking confirmed successfully!');
        return redirect()->back()->with('success', 'Booking confirmed successfully!');
    }
    public function SetSuccess($id)
    {
        $booking = Bookings::find($id);
        $booking->status = 'success';
        $booking->save();
        Session::flash('success', 'Booking success!');
        return redirect()->back()->with('success', 'Booking success!');
    }
    public function SetCanceled($id)
    {
        $booking = Bookings::find($id);
        $booking->status = 'canceled';
        $booking->save();
        Session::flash('success', 'Booking canceled!');
        return redirect()->back()->with('success', 'Booking canceled!');
    }
}
