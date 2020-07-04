@extends('adminlte.master')

@section('content')
<div class="ml-3 mt-4 mr-3">
    <h1>Data Jawaban</h1>
    <a href="/pertanyaan" class="btn btn-primary mb-3">
        Kembali ke List Pertanyaan!
    </a>
    <table class="table table-bordered">
        <thead>                  
          <tr>
            <th style="width: 10px">#</th>
            <th>Isi</th>
            <th style="width: 40px">Tanggal dibuat</th>
            <th style="width: 40px">Tanggal diperbaharui</th>
          </tr>
        </thead>
        <tbody>
          @foreach($jawaban as $key => $item)
            <tr>
            <td> {{$key+1}} </td>
            <td> {{ $item->isi }} </td>
            <td> {{ $item->tanggal_dibuat}} </td>
            <td> {{ $item->tanggal_diperbaharui}} </td>
            </tr>
          @endforeach
          
        </tbody>
      </table>
</div>

@endsection