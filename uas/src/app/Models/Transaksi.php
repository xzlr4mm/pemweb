<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    // Kolom yang bisa diisi secara massal
    protected $fillable = [
        'nama_pelanggan',
        'waktu_transaksi',
        'total_harga',
        'metode_pembayaran',
    ];

    // Casting otomatis ke tipe data
    protected $casts = [
        'waktu_transaksi' => 'datetime',
        'total_harga' => 'float',
    ];
}
