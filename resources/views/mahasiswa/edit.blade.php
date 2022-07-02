@extends('layouts.master')

@section('content')
    <div class="container">
        <h1>Edit Mahasiswa</h1>
        <form action="/mahasiswa/{{$mahasiswa->id}}" method="POST">
            @method('put')
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$mahasiswa->nama}}">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">NIM</label>
                <input type="text" name="nim" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$mahasiswa->nim}}">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Prodi</label>
                <input type="text" name="prodi" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$mahasiswa->prodi}}">
            </div>
            <label for="exampleInputEmail1" class="form-label">Jenis Kelamin</label>
            <select class="form-select" name="jenis_kelamin">
                <option value="">Pilih Jenis Kelamin</option>
                <option value="L" @if($mahasiswa->jenis_kelamin == "L") selected @endif>Laki-Laki</option>
                <option value="P" @if($mahasiswa->jenis_kelamin == "P") selected @endif>Perempuan</option>
            </select><br>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Alamat</label>
                <textarea class="form-control" name="alamat" rows="10">{{$mahasiswa->alamat}}</textarea><br>
            </div>
            @csrf   
<input type="submit" name="submit" class="btn btn-info" value="Update">

</form>