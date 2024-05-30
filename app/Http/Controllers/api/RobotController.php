<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class RobotController extends Controller
{
    public function getBatteryData(Request $request)
    {
        // Mengirim permintaan HTTP ke robot untuk mendapatkan data baterai
        $response = Http::get('http://127.0.0.1/api/battery');

        // Memeriksa apakah permintaan berhasil
        if ($response->successful()) {
            // Mengambil data baterai dari respons
            $batteryData = $response->json();

            // Mengembalikan data baterai sebagai respons JSON
            return response()->json($batteryData);
        } else {
            // Jika permintaan gagal, mengembalikan pesan kesalahan
            return response()->json(['error' => 'Gagal mengambil data baterai dari robot'], 500);
        }
    }
}