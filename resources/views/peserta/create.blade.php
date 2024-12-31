@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <h1>Tambah Peserta</h1>
        
        <form action="{{ route('peserta.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="id_siswa" class="block text-gray-700">Nama Siswa</label>
                <select name="id_siswa" id="id_siswa" class="w-full px-4 py-2 border rounded" required>
                    <option value="">Pilih Siswa</option>
                    @foreach ($siswa as $item)
                        <option value="{{ $item->id_siswa }}">
                            {{ $item->nis }} - {{ $item->nama_siswa }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-4">
                <label for="id_ujian" class="block text-gray-700">Nama Ujian</label>
                <select name="id_ujian" id="id_ujian" class="w-full px-4 py-2 border rounded" required>
                    @foreach ($ujian as $item)
                        <option value="{{ $item->id_ujian }}">{{ $item->nama_ujian }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-4">
                <label for="status_peserta" class="block text-gray-700">Status Peserta</label>
                <select name="status_peserta" id="status_peserta" class="w-full px-4 py-2 border rounded" required>
                    <option value="">Pilih Status</option>
                    <option value="Lulus">Lulus</option>
                    <option value="Tidak Lulus">Tidak Lulus</option>
                </select>
            </div>


            <div class="mb-4">
                <label for="nilai" class="block text-gray-700">Nilai</label>
                <input type="number" name="nilai" id="nilai" class="w-full px-4 py-2 border rounded" step="0.01">
            </div>

            <button type="submit" class="bg-blue-600 text-white py-2 px-6 rounded-lg shadow-md hover:bg-blue-700">Simpan</button>
        </form>
    </div>
@endsection
