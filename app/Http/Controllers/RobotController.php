<?php

namespace App\Http\Controllers;
use App\Models\Robot;
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
 
    	// mengirim data pegawai ke view index
    	return view('admin.robot',['robot' => $robot]);
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
        $validatedData = $request->validate([
            'nama'     => 'required|max:25',
            'password'     => 'required|max:15',
            'id_operator'     => 'required|max:15',
            'tanggal_lahir'   => 'required',
            'alamat'   => 'required',
            'create_at' => 'now();',
            'update_at' => 'now();'
        ]);

        // Membuat hash dari password
        $hashedPassword = Hash::make($validatedData['password']);

        // Membuat pengguna baru dengan data yang sudah di-hash
        $user = robot::create([
            'username' => $validatedData['username'],
            'id_operator' => $validatedData['id_operator'],
            'tanggal_lahir' => $validatedData['tanggal_lahir'],
            'password' => $hashedPassword,
            'alamat' => $validatedData['alamat'],
        ]);

        // Mengembalikan respons, misalnya redirect atau JSON response
        return redirect()->route('admin.operator')->with(['success' => 'Data Berhasil Disimpan!']);
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
                    'username'     => 'required|max:25',
                    'password'     => 'required|max:15',
                    'id_operator'     => 'required|max:15',
                    'tanggal_lahir'   => 'required',
                    'alamat'   => 'required',
                    'create_at' => 'now();',
                    'update_at' => 'now();'
                ]);
                
                // update data kecuali password
                $robot->username = $validatedData['username'];
                $robot->id_operator = $validatedData['id_operator'];
                $robot->tanggal_lahir = $validatedData['tanggal_lahir'];
                $robot->alamat = $validatedData['alamat'];
        
                // mengecek password
                if ($request->filled('password')) {
                    $robot->password = Hash::make($validatedData['password']);
                }
                
                // update data ke database
                $robot->update($request->all());
        
                // kembali ke tampilan index operator
                return redirect()->route('admin.robot')->with('success','Product updated successfully');
            }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(robot $robot)
    {
        // menghapus data
        $robot->delete();

        //kembali ke tampilan index operator
        return redirect()->route('admin.robot')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
