@extends('adminlte.master')

@section('content')
<div class="ml-3 mt-4 mr-3">
    <h1>Data</h1>
    <a href="/pertanyaan" class="btn btn-primary mb-3">
        Kembali ke List Pertanyaan!
    </a>
    <h3>Detail</h3> <br>
    <p> Judul : {{ $pertanyaan->judul}}</p> <br>
    <p> Isi : {{ $pertanyaan->isi}}</p> <br>
    <p> Tanggal dibuat : {{ $pertanyaan->tanggal_dibuat}}</p> <br>
    <p> Tanggal diperbaharui : {{ $pertanyaan->tanggal_diperbaharui}}</p> <br>
 
</div>

@endsection