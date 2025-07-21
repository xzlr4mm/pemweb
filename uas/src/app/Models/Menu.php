<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    // Menentukan kolom yang boleh diisi (mass assignment)
    protected $fillable = [
        'nama',
        'deskripsi',
        'harga',
        'kategori',
        'tersedia',
    ];

    // (Opsional) Cast otomatis ke tipe data
    protected $casts = [
        'harga' => 'float',
        'tersedia' => 'boolean',
    ];
}
