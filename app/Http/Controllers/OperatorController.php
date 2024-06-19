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
    public function update(Request $request, $id)
    {
        
        // Validasi data input
        $request->validate([
            'username' => 'required|string|max:255',
            'password' => 'nullable|string|min:6',
            'id_operator' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
            'alamat' => 'required|string|max:255',
        ]);

        // Mengambil data operator berdasarkan ID
        $user = User::findOrFail($id);

        // Update data user
        $user->username = $request->username;

        // Hanya update password jika ada input password baru
        if ($request->filled('password')) {
            $user->password = bcrypt($request->password);
        }

        $user->id_operator = $request->id_operator;
        $user->tanggal_lahir = $request->tanggal_lahir;
        $user->alamat = $request->alamat;

        // Simpan perubahan
        $user->save();

        // Redirect kembali dengan pesan sukses
        return redirect()->route('admin.operator')->with('success', 'Data operator berhasil diperbarui.');
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
