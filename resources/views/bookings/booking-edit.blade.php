@extends('layout.app')

@section('title')
Booking | Trainlane
@endsection

@section('content')
<div class="content">
    <div class="booking-container">
        <h2>Edit Pemesanan Tiket Kereta Api</h2>
        <form action="{{ route('bookings.update', $booking->id) }}" method="POST">
            @csrf
            @method('PUT')
            <label for="keberangkatan">Keberangkatan:</label>
            <input type="text" id="keberangkatan" name="keberangkatan" placeholder="Masukkan Keberangkatan" value="{{ $booking->keberangkatan }}" required>
            <label for="tujuan">Tujuan:</label>
            <input type="text" id="tujuan" name="tujuan" placeholder="Masukkan Tujuan" value="{{ $booking->tujuan }}" required>
            <label for="tgl_keberangkatan">Tanggal Keberangkatan:</label>
            <input type="date" id="tgl_keberangkatan" name="tgl_keberangkatan" value="{{ $booking->tgl_keberangkatan }}" required>
            <label for="jml_tiket">Jumlah Tiket:</label>
            <input type="number" id="jml_tiket" name="jml_tiket" placeholder="Jumlah tiket" value="{{ $booking->jml_tiket }}" required>
            <div class="button-group">
                <button type="submit" name="update">Update</button>
            </div>
        </form>
    </div>
</div>
@endsection
