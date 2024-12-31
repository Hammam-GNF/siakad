<?php

namespace App\Http\Controllers;

use App\Models\Peserta;
use App\Models\Ujian;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ujian = Ujian::with('mapel')
            ->orderBy('tanggal', 'asc')
            ->get();

        $lulusCount = Peserta::where('status', 'Lulus')->count();

        $gagalSiswa = Peserta::where('status', 'Gagal')->get();

        return view('welcome', compact('ujian', 'lulusCount', 'gagalSiswa'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
