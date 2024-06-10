<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\Booking;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class TransactionController extends Controller
{
    public function index()
    {
        $bookings = Booking::all();
        $transactions = Transaction::with('bookings')->get();
        return view('transactions.transaction', compact('transactions'));
    }

    public function create()
    {
        $bookings = Booking::all(); // Ambil semua data booking
        return view('transactions.transaction-create', compact('bookings'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'tanggal' => 'required|date',
            'keberangkatan' => 'required|string|max:255',
            'tujuan' => 'required|string|max:255',
            'jumlah_tiket' => 'required|integer',
            'total_harga' => 'required|numeric',
        ]);
        Transaction::create($request->all());
        return redirect()->route('transactions.index')->with('success', 'Transaction created successfully.');
    }

    public function show(Transaction $transaction)
    {
        return view('transactions.show', compact('transaction'));
    }

    public function edit(Transaction $transaction)
    {
        return view('transactions.transaction-edit', compact('transaction'));
    }

    public function update(Request $request, Transaction $transaction)
    {
        $request->validate([
            'tanggal' => 'required|date',
            'keberangkatan' => 'required|string|max:255',
            'tujuan' => 'required|string|max:255',
            'jumlah_tiket' => 'required|integer',
            'total_harga' => 'required|numeric',
        ]);

        $transaction->update($request->all());

        return redirect()->route('transactions.index')->with('success', 'Transaction updated successfully.');
    }

    public function destroy(Transaction $transaction)
    {
        $transaction->delete();

        return redirect()->route('transactions.index')->with('success', 'Transaction deleted successfully.');
    }

    public function cetak()
    {
        $transaction = Transaction::all();
        $pdf = Pdf::loadview('transactions.transaction-cetak', compact('transaction'));
        return $pdf->download('laporan-transaksi.pdf');
    }
}
