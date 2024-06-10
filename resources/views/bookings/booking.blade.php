@extends('layout.app')

@section('title')
Booking | Trainlane
@endsection

@section('content')

<div class="content">
    <h2>Data Pemesanan Tiket Kereta Api</h2>
    <button onclick="window.location.href='{{route('bookings.create')}}'" class="add-button">Tambah Data</button>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Keberangkatan</th>
                <th>Tujuan</th>
                <th>Tanggal Keberangkatan</th>
                <th>Jumlah Tiket</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @if ($bookings->count() > 0)
                @foreach ($bookings as $index => $booking)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $booking->keberangkatan }}</td>
                        <td>{{ $booking->tujuan }}</td>
                        <td>{{ $booking->tgl_keberangkatan }}</td>
                        <td>{{ $booking->jml_tiket }}</td>
                        <td>
                        <button class="edit" onclick="window.location.href='{{ route('bookings.edit', $booking->id) }}'">Edit</button>
                            <form action="{{ route('bookings.destroy', $booking->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="delete">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="6" style="text-align:center;">Tidak ada data</td>
                </tr>
            @endif
        </tbody>
    </table>
</div>
@endsection
