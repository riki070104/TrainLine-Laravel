@extends('layout.app')

@section('title')
Booking | Trainlane
@endsection

@section('content')
<div class="content">
    <div class="booking-container">
        <h2>Pemesanan Tiket Kereta Api</h2>
        <form action="{{ route('bookings.store') }}" method="POST">
            @csrf
            <label for="keberangkatan">Keberangkatan:</label>
            <input type="text" id="keberangkatan" name="keberangkatan" placeholder="Masukkan Keberangkatan" required>
            <label for="tujuan">Tujuan:</label>
            <input type="text" id="tujuan" name="tujuan" placeholder="Masukkan Tujuan" required>
            <label for="tgl_keberangkatan">Tanggal Keberangkatan:</label>
            <input type="date" id="tgl_keberangkatan" name="tgl_keberangkatan" required>
            <label for="jml_tiket">Jumlah Tiket:</label>
            <input type="number" id="jml_tiket" name="jml_tiket" placeholder="Jumlah tiket" required>
            <div class="button-group">
                <button type="submit">Tambah</button>
            </div>
        </form>
    </div>
</div>
@endsection
