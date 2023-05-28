<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;

class BookingController extends Controller
{
    public function index($room)
    {
        return view('booking', ['room' => $room]);
    }

    public function store(Request $request, $room)
    {
        // Validasi data yang diterima dari form
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'checkin_date' => 'required|date',
            'checkout_date' => 'required|date|after:checkin_date',
        ]);

        // Simpan data pemesanan ke dalam database
        $booking = new Booking();
        $booking->room = $room;
        $booking->name = $request->name;
        $booking->email = $request->email;
        $booking->checkin_date = $request->checkin_date;
        $booking->checkout_date = $request->checkout_date;
        $booking->save();

        // Redirect ke halaman konfirmasi pemesanan
        return redirect()->route('confirmation', ['booking' => $booking]);
    }

    public function confirmation(Booking $booking){
        return view('confirmation', ['booking' => $booking]);
    }

}