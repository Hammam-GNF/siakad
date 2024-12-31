@extends('layouts.dashboard')

@section('content')
<div class="container">
    <h1>Edit Mata Pelajaran</h1>

    <form action="{{ route('mapel.update', $mapel->id_mapel) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nama_mapel">Nama Mata Pelajaran</label>
            <input type="text" name="nama_mapel" id="nama_mapel" class="form-control" value="{{ old('nama_mapel', $mapel->nama_mapel) }}" required>
        </div>

        <button type="submit" class="btn btn-warning mt-3">Perbarui</button>
    </form>
</div>
@endsection
