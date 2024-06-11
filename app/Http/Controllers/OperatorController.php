<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class OperatorController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function operator()
    {
        return view('operator.dashboard');
    }
    public function index()
    {
        $user = User::where('role', 'operator')->get();
        return view('admin.operator', compact('user'));
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
            'role'   => 'required',
            'alamat'   => 'required',
            'create_at' => 'now();',
            'update_at' => 'now();'
        ]);

        // Membuat hash dari password
        $hashedPassword = Hash::make($validatedData['password']);

        // Membuat pengguna baru dengan data yang sudah di-hash
        $user = user::create([
            'username' => $validatedData['username'],
            'id_operator' => $validatedData['id_operator'],
            'tanggal_lahir' => $validatedData['tanggal_lahir'],
            'password' => $hashedPassword,
            'alamat' => $validatedData['alamat'],
            'role' => $validatedData['role'],

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
    public function edit(user $user)
    {
        // menuju ke tampilan edit

        return view('admin.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, user $user)
    {
        // vadlidasi data dari requset
        $validatedData = $request->validate([
            'username'     => 'required|max:25',
            'password'     => 'required|max:15',
            'id_operator'     => 'required|max:15',
            'tanggal_lahir'   => 'required',
            'alamat'   => 'required',
            'create_at' => 'now();',
            'update_at' => 'now();'
        ]);

        // update data kecuali password
        $user->username = $validatedData['username'];
        $user->id_operator = $validatedData['id_operator'];
        $user->tanggal_lahir = $validatedData['tanggal_lahir'];
        $user->alamat = $validatedData['alamat'];

        // mengecek password
        if ($request->filled('password')) {
            $user->password = Hash::make($validatedData['password']);
        }

        // update data ke database
        $user->update($request->all());

        // kembali ke tampilan index operator
        return redirect()->route('admin.operator')->with('success', 'Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        // menghapus data
        $user->delete();

        //kembali ke tampilan index operator
        return redirect()->route('admin.operator')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
