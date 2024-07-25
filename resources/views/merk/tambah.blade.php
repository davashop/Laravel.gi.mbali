@extends('layout')
@section('content')
    <h1>Tambah Merk</h1>
    <form action="{{ route('merk.store') }}" method="post">
        @csrf
        <div>
            <label for="nama">Merk</label>
            <input type="text" name="nama" id="nama" placeholder="Merk" required>
        </div>
        <br>
        <div> 
        <label for="keterangan">Keterangan</label>
            <textarea type="text" name="keterangan" id="keterangan" placeholder="Keterangan" required></textarea>
        </div>
        <br>
        <button type="submit">Simpan</button>
    </form>
@endsection