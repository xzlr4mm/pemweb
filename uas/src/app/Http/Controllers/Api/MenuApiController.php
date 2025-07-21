<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Menu;

class MenuApiController extends Controller
{
    public function index()
    {
        $menus = Menu::with('kategori')->get(); // jika ada relasi kategori

        return response()->json([
            'status' => true,
            'message' => 'Data menu berhasil diambil',
            'data' => $menus
        ]);
    }
}
