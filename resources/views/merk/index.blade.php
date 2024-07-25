@extends('layout')
@section('content')
    <style type="text/css">
        .back{
            width: 15%;
            padding: 10%;
            margin-left: 32%;
        }
    </style>
        <div class="back">
        <h1>Merk Montor</h1>
        <a href="{{ route('merk.create') }}">+ Tambah +</a>
        <br>
        <br>
        <table border="1">
            <thead>
                <tr>
                    <td>No</td>
                    <td>Nama</td>
                    <td>Keterangan</td>
                    <td>Aksi</td>
                </tr>
            </thead>
            <tbody>
                <?php $no=1; ?>
                @foreach($merks as $merk)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $merk->nama }}</td>
                        <td>{{ $merk->keterangan }}</td>
                        <td>
                            <a href="{{ url("/merk/{$merk->id}") }}">Edit</a>
                            ||
                            <form action="{{ url("/merk/{$merk->id}") }}" method="post"> 
                                @method("delete")
                                @csrf
                                <button type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        </div>
@endsection