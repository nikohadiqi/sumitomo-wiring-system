<?php

namespace App\Http\Controllers;

use App\Models\operator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class OperatorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // mengecek data di database
        $operator = DB::table('operator')->get();
 
    	// mengirim data pegawai ke view index
    	return view('admin.operator',['operator' => $operator]);
    }   

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // menuju tampilan create
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         // Validasi data yang diterima dari request
        $validatedData = $request->validate([
            'username'     => 'required|max:25',
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
        $user = operator::create([
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
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(operator $operator)
    {
        // menuju ke tampilan edit
        
        return view('admin.edit', compact('operator'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, operator $operator)
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
        $operator->username = $validatedData['username'];
        $operator->id_operator = $validatedData['id_operator'];
        $operator->tanggal_lahir = $validatedData['tanggal_lahir'];
        $operator->alamat = $validatedData['alamat'];

        // mengecek password
        if ($request->filled('password')) {
            $operator->password = Hash::make($validatedData['password']);
        }
        
        // update data ke database
        $operator->update($request->all());

        // kembali ke tampilan index operator
        return redirect()->route('admin.operator')->with('success','Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(operator $operator)
    {
        // menghapus data
        $operator->delete();

        //kembali ke tampilan index operator
        return redirect()->route('admin.operator')->with(['success' => 'Data Berhasil Dihapus!']);
    
    }
}
