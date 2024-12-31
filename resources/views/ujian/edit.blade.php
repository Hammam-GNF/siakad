@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <h1>Edit Ujian</h1>
        
        <form action="{{ route('ujian.update', $ujian->id_ujian) }}" method="POST">
            @csrf
            @method('PUT')
            
            <div class="mb-4">
                <label for="nama_ujian" class="block text-gray-700">Nama Ujian</label>
                <input type="text" name="nama_ujian" id="nama_ujian" class="w-full px-4 py-2 border rounded" value="{{ $ujian->nama_ujian }}" required>
            </div>

            <div class="mb-4">
                <label for="id_mapel" class="block text-gray-700">Mata Pelajaran</label>
                <select name="id_mapel" id="id_mapel" class="w-full px-4 py-2 border rounded" required>
                    @foreach ($mapel as $item)
                        <option value="{{ $item->id_mapel }}" @if($item->id_mapel == $ujian->id_mapel) selected @endif>{{ $item->nama_mapel }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-4">
                <label for="tanggal" class="block text-gray-700">Tanggal</label>
                <input type="datetime-local" name="tanggal" id="tanggal" class="w-full px-4 py-2 border rounded" value="{{ \Carbon\Carbon::parse($ujian->tanggal)->format('Y-m-d\TH:i') }}" required>
            </div>

            <button type="submit" class="bg-blue-600 text-white py-2 px-6 rounded-lg shadow-md hover:bg-blue-700">Update</button>
        </form>
    </div>
@endsection
