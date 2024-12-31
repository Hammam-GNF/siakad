@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <h1>Daftar Peserta</h1>
        <a href="{{ route('peserta.create') }}" 
            class="inline-block bg-blue-600 text-white py-2 px-6 rounded-lg shadow-md hover:bg-blue-700 transition-all duration-300">
            Tambah Peserta
        </a>

        <table class="table mt-4">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Peserta</th>
                    <th>Ujian</th>
                    <th>Status Peserta</th>
                    <th>Nilai</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($peserta as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->siswa->nama_siswa }}</td>
                        <td>{{ $item->ujian->nama_ujian }}</td>
                        <td>{{ $item->status_peserta }}</td>
                        <td>{{ $item->nilai }}</td>
                        <td>
                            <a href="{{ route('peserta.edit', $item->id_peserta) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('peserta.destroy', $item->id_peserta) }}" method="POST" style="display:inline;">
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
