<?php

namespace App\Http\Controllers;

use App\Models\Mapel;
use Illuminate\Http\Request;

class MapelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mapels = Mapel::all();
        return view('mapel.index', compact('mapels'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mapel.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_mapel' => 'required|string|max:50',
        ]);

        Mapel::create([
            'nama_mapel' => $request->nama_mapel,
        ]);

        return redirect()->route('mapel.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id_mapel)
    {
        $mapel = Mapel::findOrFail($id_mapel);
        return view('mapel.edit', compact('mapel'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id_mapel)
    {
        $request->validate([
            'nama_mapel' => 'required|string|max:50',
        ]);

        $mapel = Mapel::findOrFail($id_mapel);
        $mapel->update([
            'nama_mapel' => $request->nama_mapel,
        ]);

        return redirect()->route('mapel.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id_mapel)
    {
        $mapel = Mapel::findOrFail($id_mapel);
        $mapel->delete();
        
        return redirect()->route('mapel.index');
    }
}
