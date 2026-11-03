<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pendaftaran;
use Illuminate\Support\Facades\Hash; 
class PpdbController extends Controller



{
    public function index()
    {
        return view('registrasi');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'nisn' => 'required|string|unique:pendaftarans,nisn',
            'tempat_lahir' => 'required|string',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required',
            'sekolah_asal' => 'required|string',
            'nama_ortu' => 'required|string',
            'whatsapp' => 'required|string',
            'alamat' => 'required|string',
            'password' => 'required|min:6',
        ]);

        $validated['password'] = Hash::make($request->password);

        Pendaftaran::create($validated);

        return redirect()->back()->with('success', 'Pendaftaran PPDB Berhasil Terkirim!');
    }

    public function adminDashboard()
    {
        $pendaftaran = Pendaftaran::latest()->get();
        return view('admin_mtsserpong', compact('pendaftaran'));
    }
}
