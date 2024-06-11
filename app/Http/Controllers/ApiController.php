<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'message' => 'required|string',
        ]);

        // Simpan data ke session untuk kemudahan (atau database jika perlu)
        session(['message' => $request->message]);

        return response()->json(['success' => true]);
    }
    public function index()
    {
        $message = session('message', 'No message received');
        return view('hllo', compact('message'));
    }
}
