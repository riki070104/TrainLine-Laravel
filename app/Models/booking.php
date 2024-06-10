<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class booking extends Model
{
    use HasFactory;
    protected $table = 'bookings';

    // Tentukan kolom-kolom yang bisa diisi secara massal
    protected $fillable = [
        'no',
        'keberangkatan',
        'tujuan',
        'tgl_keberangkatan',
        'jml_tiket',
        'transaction_id',
    ];
    public $timestamps = true;

    // Menambahkan hubungan Many-to-One dengan model Transaction
    public function transaction()
    {
        return $this->hasMany(Transaction::class, 'transaction_id');
    }
}
