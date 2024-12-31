@extends('layouts.dashboard')

@section('content')
<div class="container">
    <h1>Daftar Mata Pelajaran</h1>
    <a href="{{ route('mapel.create') }}" class="inline-block bg-blue-600 text-white py-2 px-6 rounded-lg shadow-md hover:bg-blue-700 transition-all duration-300">
        Tambah Mata Pelajaran
    </a>

    <table id="mapelTable" class="table table-bordered mt-4">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Mata Pelajaran</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($mapels as $mapel)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $mapel->nama_mapel }}</td>
                <td>
                    <a href="{{ route('mapel.edit', $mapel->id_mapel) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('mapel.destroy', $mapel->id_mapel) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
