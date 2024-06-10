@extends('layout.app')

@section('title')
Create Transaction
@endsection

@section('content')
<div class="content">
    <div class="booking-container">
        <h2>Create Transaction</h2>
        <form action="{{ route('transactions.store') }}" method="POST">
            @csrf
            <label for="tanggal">Tanggal:</label>
            <input type="date" id="tanggal" name="tanggal" required>

            <label for="keberangkatan">Keberangkatan:</label>
            <input type="text" id="keberangkatan" name="keberangkatan" required>

            <label for="tujuan">Tujuan:</label>
            <input type="text" id="tujuan" name="tujuan" required>

            <label for="jumlah_tiket">Jumlah Tiket:</label>
            <input type="number" id="jumlah_tiket" name="jumlah_tiket" required>

            <label for="total_harga">Total Harga:</label>
            <input type="number" id="total_harga" name="total_harga" required>

            <label for="booking_id">Booking:</label>
            <select id="booking_id" name="booking_id" required>
                @foreach($bookings as $booking)
                <option value="{{ $booking->id }}">{{ $booking->keberangkatan }} - {{ $booking->tujuan }}</option>
                @endforeach
            </select>
            <button type="submit">Submit</button>
        </form>
    </div>
</div>
@endsection