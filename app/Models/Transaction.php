<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_transaksi';
    
    protected $fillable = [
        'tanggal',
        'keberangkatan',
        'tujuan',
        'jumlah_tiket',
        'total_harga'
    ];

    // Menambahkan hubungan One-to-Many dengan model Booking
    public function bookings()
    {
        return $this->hasMany(Booking::class, 'transaction_id');
    }

}
