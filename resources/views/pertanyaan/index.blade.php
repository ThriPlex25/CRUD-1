@extends('adminlte.master')

@section('content')
<div class="ml-3 mt-4 mr-3">
    <h1>List Data Pertanyaan</h1>
    <a href="/pertanyaan/create" class="btn btn-primary mb-3">
        Tanya Lagi!
    </a>
    <table class="table table-bordered">
        <thead>                  
          <tr>
            <th style="width: 10px">#</th>
            <th>Judul</th>
            <th>Isi</th>
            <th style="width: 40px">Tanggal dibuat</th>
            <th style="width: 40px">Tanggal diperbaharui</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach($pertanyaan as $key => $item)
            <tr>
            <td> {{$key+1}} </td>
            <td> {{ $item->judul }} </td>
            <td> {{ $item->isi }} </td>
            <td> {{ $item->tanggal_dibuat}} </td>
            <td> {{ $item->tanggal_diperbaharui}} </td>
            <td>
              <a href="/pertanyaan/{{$item->id}}" class="btn btn-sm btn-info">show</a>
              <a href="/pertanyaan/{{$item->id}}/edit" class="btn btn-sm btn-warning">edit</a>
              <form action="/pertanyaan/{{$item->id}}" method="post" style="display:inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
              </form>
            </td>
            </tr>
          @endforeach
          
        </tbody>
      </table>
</div>

@endsection