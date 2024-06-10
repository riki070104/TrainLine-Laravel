<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('bookings', function (Blueprint $table) {
            // Pastikan untuk memeriksa apakah kolom sudah ada sebelum menambahkannya
            if (!Schema::hasColumn('bookings', 'transaction_id')) {
                $table->unsignedBigInteger('transaction_id')->nullable()->after('id');
                
                $table->foreign('transaction_id')->references('id_transaksi')->on('transactions')->onDelete('set null');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('bookings', function (Blueprint $table) {
            $table->dropForeign(['transaction_id']);
            $table->dropColumn('transaction_id');
        });
    }
};
