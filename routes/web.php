<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\TransactionController;
use App\Models\Transaction;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});




// Rute untuk BookingController
Route::resource('bookings', BookingController::class);
Route::put('bookings/{booking}', [BookingController::class, 'update'])->name('bookings.update');

Route::resource('transactions', TransactionController::class);
Route::get('transactions.cetak' , [TransactionController::class, 'cetak'])->name('transactions.cetak');