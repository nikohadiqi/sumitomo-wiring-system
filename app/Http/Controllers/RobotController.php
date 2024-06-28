<?php

namespace App\Http\Controllers;
use App\Models\Robot;
use App\Models\CheckPoint;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class RobotController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // mengecek data di database
        $robot = DB::table('robot')->get();
        $checkpoint = Checkpoint::all('nama_posisi');
    	// mengirim data pegawai ke view index
    	return view('admin.robot', compact('checkpoint', 'robot'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $checkpoints = Checkpoint::all('nama_posisi');

        $validatedData = $request->validate([
            'nama'     => 'required|max:25',
            'nama_posisi'     => 'required|max:15',
            'tipe'     => 'required|max:15',
            'baterai'   => 'required',
            'warna'   => 'required',
            'create_at' => 'now();',
            'update_at' => 'now();'
        ]);

        // Membuat pengguna baru dengan data yang sudah di-hash
        $robot = robot::create([
            'nama' => $validatedData['nama'],
            'nama_posisi' => $validatedData['nama_posisi'],
            'tipe' => $validatedData['tipe'],
            'baterai' => $validatedData['baterai'],
            'warna' => $validatedData['warna'],
        ]);

        // Mengembalikan respons, misalnya redirect atau JSON response
        return redirect()->route('admin.robot.index')->with(['success' => 'Data Berhasil Disimpan!']);
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
    public function edit(robot $robot)
    {
        return view('admin.edit', compact('robot'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, robot $robot)
    {
                // vadlidasi data dari requset
                $validatedData =$request->validate([
                    'nama'     => 'required|max:25',
                    'nama_posisi'     => 'required|max:15',
                    'tipe'     => 'required|max:15',
                    'baterai'   => 'required',
                    'warna'   => 'required',
                    'create_at' => 'now();',
                    'update_at' => 'now();'
                ]);
                
                // update data kecuali nama_posisi
                $robot->nama = $validatedData['nama'];
                $robot->tipe = $validatedData['tipe'];
                $robot->nama_posisi = $validatedData['nama_posisi'];
                $robot->baterai = $validatedData['baterai'];
                $robot->warna = $validatedData['warna'];
        
                // update data ke database
                $robot->update($request->all());
        
                // kembali ke tampilan index operator
                return redirect()->route('admin.robot.index')->with('success','Product updated successfully');
            }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(robot $robot)
    {
        // menghapus data
        $robot->delete();

        //kembali ke tampilan index operator
        return redirect()->route('admin.robot.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
