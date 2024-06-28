<?php

namespace App\Http\Controllers;

use App\Models\CheckPoint;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class CheckpointController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $checkpoint = DB::table('checkpoint')->get();
 
    	// mengirim data pegawai ke view index
    	return view('admin.checkpoint', ['checkpoint' => $checkpoint]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         // Validasi data yang diterima dari request
         $validatedData = $request->validate([
            'nama_posisi'     => 'required|max:25',
            'create_at' => 'now();',
            'update_at' => 'now();'
        ]);

        // Membuat pengguna baru dengan data yang sudah di-hash
        $user = CheckPoint::create([
            'nama_posisi' => $validatedData['nama_posisi'],
        ]);

        // Mengembalikan respons, misalnya redirect atau JSON response
        return redirect()->route('admin.checkpoint.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update_status(Request $request, $id)
    {
        {
            $status = $request->input('status');
            $model = checkpoint::findOrFail($id);  // Ganti dengan nama model Anda
            $model->status = $status;
            $model->save();
    
            return response()->json(['success' => true]);
        }
    }
    public function update(Request $request, checkpoint $checkpoint)
    {
        // vadlidasi data dari requset
        $validatedData =$request->validate([
            'nama_posisi'     => 'required|max:25',
            'status'     => 'required|max:15',
            'create_at' => 'now();',
            'update_at' => 'now();'
        ]);
        
        // update data kecuali password
        $checkpoint->username = $validatedData['username'];
        $checkpoint->id_operator = $validatedData['id_operator'];
        $checkpoint->tanggal_lahir = $validatedData['tanggal_lahir'];
        $checkpoint->alamat = $validatedData['alamat'];

        // mengecek password
        if ($request->filled('password')) {
            $checkpoint->password = Hash::make($validatedData['password']);
        }
        
        // update data ke database
        $checkpoint->update($request->all());

        // kembali ke tampilan index operator
        return redirect()->route('admin.checkpoint.index')->with('success','Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(checkpoint $checkpoint)
    {
        // menghapus data
        $checkpoint->delete();

        //kembali ke tampilan index operator
        return redirect()->route('admin.checkpoint.index')->with(['success' => 'Data Berhasil Dihapus!']);
    
    }
    public function toggleStatus(Request $request)
    {
        $checkpoint = Checkpoint::find($request->id);
        if ($checkpoint) {
            $checkpoint->status = $checkpoint->status === 'menyala' ? 'mati' : 'menyala';
            $checkpoint->save();
        }
        return response()->json(['status' => $checkpoint->status]);
    }
}
