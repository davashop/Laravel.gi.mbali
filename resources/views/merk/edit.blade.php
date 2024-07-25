@extends('layout')
@section('content')
    <h1>Edit Merk</h1>
    <form action="{{ route('merk.update', $merk->id) }}" method="post">
        @method('put')
        @csrf
        <div>
            <label for="nama">Merk</label>
            <input type="text" name="nama" id="nama" placeholder="Merk" value="{{ $merk->nama }}" required>
        </div>
        <br>
        <div> 
            <label for="keterangan">Keterangan</label>
            <textarea type="text" name="keterangan" id="keterangan" placeholder="Keterangan" value="{{ $merk->keterangan }}" required>{{ $merk->keterangan }}</textarea>
        </div>
        <br>
        <button type="submit">Simpan</button>
    </form>
@endsection