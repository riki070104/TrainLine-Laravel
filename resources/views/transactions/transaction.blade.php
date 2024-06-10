@extends('layout.app')

@section('title', 'Transactions')

@section('content')
    <div class="content">
        <h2>Transactions</h2>
        <button onclick="window.location.href='{{ route('transactions.create') }}'" class="add-button">Add Transaction</button>
        <button onclick="window.location.href='{{ route('transactions.cetak') }}'" class="print-button">Print Transactions</button>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tanggal</th>
                    <th>Keberangkatan</th>
                    <th>Tujuan</th>
                    <th>Jumlah Tiket</th>
                    <th>Total Harga</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($transactions as $transaction)
                    <tr>
                        <td>{{ $transaction->id_transaksi }}</td>
                        <td>{{ $transaction->tanggal }}</td>
                        <td>{{ $transaction->keberangkatan }}</td>
                        <td>{{ $transaction->tujuan }}</td>
                        <td>{{ $transaction->jumlah_tiket }}</td>
                        <td>{{ $transaction->total_harga }}</td>
                        <td>
                            <a href="{{ route('transactions.edit', $transaction->id_transaksi) }}">Edit</a>
                            <form action="{{ route('transactions.destroy', $transaction->id_transaksi) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection