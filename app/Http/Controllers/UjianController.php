<?php

namespace App\Http\Controllers;

use App\Models\Mapel;
use App\Models\Ujian;
use Illuminate\Http\Request;

class UjianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ujian = Ujian::with('mapel')->get();
        return view('ujian.index', compact('ujian'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $mapel = Mapel::all();
        return view('ujian.create', compact('mapel'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_ujian' => 'required|string|max:50',
            'id_mapel' => 'required|exists:mapel,id_mapel',
            'tanggal' => 'required|date',
        ]);

        Ujian::create($validated);
        return redirect()->route('ujian.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id_ujian)
    {
        $ujian = Ujian::findOrFail($id_ujian);
        $mapel = Mapel::all();
        return view('ujian.edit', compact('ujian', 'mapel'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id_ujian)
    {
        $validated = $request->validate([
            'nama_ujian' => 'required|string|max:50',
            'id_mapel' => 'required|exists:mapel,id_mapel',
            'tanggal' => 'required|date',
        ]);

        $ujian = Ujian::findOrFail($id_ujian);
        $ujian->update($validated);

        return redirect()->route('ujian.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id_ujian)
    {
        $ujian = Ujian::findOrFail($id_ujian);
        $ujian->delete();
        return redirect()->route('ujian.index');
    }
}
