@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <h1>Daftar Ujian</h1>
        <a href="{{ route('ujian.create') }}" 
            class="inline-block bg-blue-600 text-white py-2 px-6 rounded-lg shadow-md hover:bg-blue-700 transition-all duration-300">
            Tambah Ujian
        </a>

        <table class="table mt-4">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Ujian</th>
                    <th>Mapel</th>
                    <th>Tanggal</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($ujian as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->nama_ujian }}</td>
                        <td>{{ $item->mapel->nama_mapel }}</td>
                        <td>{{ $item->tanggal }}</td>
                        <td>
                            <a href="{{ route('ujian.edit', $item->id_ujian) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('ujian.destroy', $item->id_ujian) }}" method="POST" style="display:inline;">
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
