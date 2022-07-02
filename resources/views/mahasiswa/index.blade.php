@extends('layouts.master')

@section('content')
    <div class="container">
    <h1><p style="text-align:center">Data Mahasiswa</p></h1>
    <a class="btn btn-info" href="/mahasiswa/create">Add Mahasiswa</a>
    <table class="table table-hover">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Prodi</th>
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
            <th>AKSI</th>
        </tr>
@foreach($mahasiswa as $m)
    <tr>
        <td>{{$m->id}}</td>
        <td>{{$m->nama}}</td>
        <td>{{$m->nim}}</td>
        <td>{{$m->prodi}}</td>
        <td>{{$m->jenis_kelamin}}</td>
        <td>{{$m->alamat}}</td>
        <td>
                <div class="btn-group" role="group" aria-label="Basic example">
                <a class="btn btn-warning" href="/mahasiswa/{{$m->id}}/edit">Edit</a>
                <form action="/mahasiswa/{{$m->id}}" method="POST">
                    @csrf
                    @method('delete')
                    <input class="btn btn-danger" type="submit" value="Delete">
            <form>
        </td>
    </tr>
@endforeach
</table>
</div>
@endsection
