<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Transaksi;
use App\Models\TransaksiDetail;
use App\Models\Menu;
use Illuminate\Support\Facades\DB;

class TransaksiApiController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'items' => 'required|array|min:1',
            'items.*.menu_id' => 'required|exists:menus,id',
            'items.*.qty' => 'required|integer|min:1',
            'total' => 'required|numeric|min:0',
        ]);

        DB::beginTransaction();

        try {
            // Buat transaksi utama
            $transaksi = Transaksi::create([
                'tanggal' => now(),
                'total' => $request->total,
            ]);

            // Simpan detail menu yang dibeli
            foreach ($request->items as $item) {
                $menu = Menu::findOrFail($item['menu_id']);

                Transaksi::create([
                    'transaksi_id' => $transaksi->id,
                    'menu_id' => $menu->id,
                    'qty' => $item['qty'],
                    'subtotal' => $menu->harga * $item['qty'],
                ]);
            }

            DB::commit();

            return response()->json([
                'status' => true,
                'message' => 'Transaksi berhasil disimpan'
            ], 201);
        } catch (\Exception $e) {
            DB::rollBack();

            return response()->json([
                'status' => false,
                'message' => 'Terjadi kesalahan: ' . $e->getMessage()
            ], 500);
        }
    }
}
