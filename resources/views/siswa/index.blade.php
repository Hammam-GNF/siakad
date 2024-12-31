@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <h1>Daftar Siswa</h1>
        <a href="{{ route('siswa.create') }}" 
            class="inline-block bg-blue-600 text-white py-2 px-6 rounded-lg shadow-md hover:bg-blue-700 transition-all duration-300">
            Tambah Siswa
        </a>

        <table id="siswaTable" class="table table-bordered mt-4">
            <thead>
                <tr>
                    <th>No</th>
                    <th>NIS</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($siswa as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->nis }}</td>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->alamat }}</td>
                        <td>
                            <a href="{{ route('siswa.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('siswa.destroy', $item->id) }}" method="POST" style="display:inline;">
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
