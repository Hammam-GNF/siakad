@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <h1>Edit Peserta</h1>
        
        <form action="{{ route('peserta.update', $peserta->id_peserta) }}" method="POST">
            @csrf
            @method('PUT')
            
            <div class="mb-4">
                <label for="id_siswa" class="block text-gray-700">Nama Siswa</label>
                <select name="id_siswa" id="id_siswa" class="w-full px-4 py-2 border rounded" required>
                    @foreach ($siswa as $item)
                        <option value="{{ $item->id_siswa }}" {{ $item->id_siswa == $peserta->id_siswa ? 'selected' : '' }}>
                            {{ $item->nama_siswa }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-4">
                <label for="id_ujian" class="block text-gray-700">Nama Ujian</label>
                <select name="id_ujian" id="id_ujian" class="w-full px-4 py-2 border rounded" required>
                    @foreach ($ujian as $item)
                        <option value="{{ $item->id_ujian }}" {{ $item->id_ujian == $peserta->id_ujian ? 'selected' : '' }}>
                            {{ $item->nama_ujian }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-4">
                <label for="status_peserta" class="block text-gray-700">Status Peserta</label>
                <input type="text" name="status_peserta" id="status_peserta" class="w-full px-4 py-2 border rounded" value="{{ $peserta->status_peserta }}" required>
            </div>

            <div class="mb-4">
                <label for="nilai" class="block text-gray-700">Nilai</label>
                <input type="number" name="nilai" id="nilai" class="w-full px-4 py-2 border rounded" value="{{ $peserta->nilai }}" step="0.01">
            </div>

            <button type="submit" class="bg-blue-600 text-white py-2 px-6 rounded-lg shadow-md hover:bg-blue-700">Perbarui</button>
        </form>
    </div>
@endsection
