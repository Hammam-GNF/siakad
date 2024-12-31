<!-- resources/views/siswa/create.blade.php -->

@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <h1>Tambah Siswa</h1>
        <form action="{{ route('siswa.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nis">NIS</label>
                <input type="text" class="w-full px-4 py-2 border rounded" id="nis" name="nis" required>
            </div>
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="w-full px-4 py-2 border rounded" id="nama" name="nama" required>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" class="w-full px-4 py-2 border rounded" id="alamat" name="alamat" required>
            </div>
            <button type="submit" class="btn btn-success mt-3">Simpan</button>
        </form>
    </div>
@endsection
