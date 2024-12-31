@extends('layouts.dashboard')

@section('content')
<div class="container">
    <h1>Tambah Mata Pelajaran</h1>

    <form action="{{ route('mapel.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nama_mapel">Nama Mata Pelajaran</label>
            <input type="text" name="nama_mapel" id="nama_mapel" class="w-full px-4 py-2 border rounded" required>
        </div>

        <button type="submit" class="btn btn-primary mt-3">Simpan</button>
    </form>
</div>
@endsection
