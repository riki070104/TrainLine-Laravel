<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index()
    {
        $bookings = Booking::all();
        return view('bookings.booking', compact('bookings'));
    }

    public function create()
    {
        return view('bookings.booking-input');
    }

    public function store(Request $request)
    {
        $request->validate([
            'keberangkatan' => 'required|string|max:255',
            'tujuan' => 'required|string|max:255',
            'tgl_keberangkatan' => 'required|date',
            'jml_tiket' => 'required|integer',
        ]);

        Booking::create($request->all());

        return redirect()->route('bookings.index')->with('success', 'Booking created successfully.');
    }

    public function show(Booking $booking)
    {
        return view('bookings.show', compact('bookings'));
    }

    public function edit(Booking $booking)
    {
        return view('bookings.booking-edit', compact('booking'));
    }


    public function update(Request $request, Booking $booking)
    {
        $request->validate([
            'keberangkatan' => 'required|string|max:255',
            'tujuan' => 'required|string|max:255',
            'tgl_keberangkatan' => 'required|date',
            'jml_tiket' => 'required|integer',
        ]);

        $booking->update($request->all());

        return redirect()->route('bookings.index')->with('success', 'Booking updated successfully.');
    }

    public function destroy(Booking $booking)
    {
        $booking->delete();

        return redirect()->route('bookings.index')->with('success', 'Booking deleted successfully.');
    }
}
