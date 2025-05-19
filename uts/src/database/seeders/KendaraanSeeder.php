<?php

namespace Database\Seeders;

use App\Models\kendaraan;
use Illuminate\Database\Seeder;

class KendaraanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        kendaraan::create([
            'merek' => 'Honda Civic',
            'tahun' => '2022',
            'harga' => '100000000',
        ]);
    }
}