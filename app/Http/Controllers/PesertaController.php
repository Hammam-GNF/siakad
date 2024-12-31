<?php

namespace App\Http\Controllers;

use App\Models\Peserta;
use App\Models\Siswa;
use App\Models\Ujian;
use Illuminate\Http\Request;

class PesertaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $peserta = Peserta::with(['siswa', 'ujian'])->get();
        return view('peserta.index', compact('peserta'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $siswa = Siswa::all();
        $ujian = Ujian::all();
        return view('peserta.create', compact('siswa', 'ujian'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'id_siswa' => 'required|exists:siswa,id_siswa',
            'id_ujian' => 'required|exists:ujian,id_ujian',
            'status_peserta' => 'required|string',
            'nilai' => 'nullable|numeric',
        ]);

        Peserta::create($validated);
        return redirect()->route('peserta.index')->with('success', 'Peserta berhasil ditambahkan!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id_peserta)
    {
        $peserta = Peserta::findOrFail($id_peserta);
        $siswa = Siswa::all();
        $ujian = Ujian::all();
        return view('peserta.edit', compact('peserta', 'siswa', 'ujian'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id_peserta)
    {
        $validated = $request->validate([
            'id_siswa' => 'required|exists:siswa,id_siswa',
            'id_ujian' => 'required|exists:ujian,id_ujian',
            'status_peserta' => 'required|string',
            'nilai' => 'nullable|numeric',
        ]);

        $peserta = Peserta::findOrFail($id_peserta);
        $peserta->update($validated);

        return redirect()->route('peserta.index')->with('success', 'Peserta berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id_peserta)
    {
        $peserta = Peserta::findOrFail($id_peserta);
        $peserta->delete();
        return redirect()->route('peserta.index');
    }
}
