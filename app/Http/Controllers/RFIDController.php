<?php

namespace App\Http\Controllers;
use App\Models\RFID;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RFIDController extends Controller
{
    public function index()
    {
        // mengecek data di database
        $RFID = DB::table('rfid_data')->get();
 
    	// mengirim data pegawai ke view index
    	return view('rfid',['RFID' => $RFID]);
    }  
    public function store(Request $request)
    {
        // Validasi data yang diterima
        $validatedData = $request->validate([
            'uid' => 'required|string',
            'label' => 'required|string',
        ]);

        // Simpan data ke database atau lakukan aksi lainnya
        // Contoh: menyimpan ke database
        // RFIDData::create($validatedData);
        $user = RFID::create([
            'uid' => $validatedData['uid'],
            'label' => $validatedData['label'],
        ]);

        return response()->json(['message' => 'Data berhasil disimpan'], 200);
    }
}
