@extends('adminlte.master')

@section('content')
    <div class="ml-3 mt-4 mr-3">
        <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Edit Pertanyaan</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
          
        <form role="form" action="/pertanyaan/{{$pertanyaan->id}}" method="POST">
              @csrf
              @method('PUT')
              
              <div class="card-body">
                <div class="form-group">
                  <label for="judul">Judul</label>
                <input type="text" class="form-control" id="judul" value="{{$pertanyaan->judul}}" name="judul" placeholder="Enter judul pertanyaan">
                </div>
                <div class="form-group">
                  <label for="isi">Isi</label>
                  <input type="text" class="form-control" id="isi" value="{{$pertanyaan->isi}}" name="isi" placeholder="isi pertanyaan">
                </div>
                <div class="form-group">
                    <label for="tanggal_dibuat">Tanggal dibuat</label>
                    <input type="date" class="form-control" id="tanggal_dibuat" value="{{$pertanyaan->tanggal_dibuat}}" name="tanggal_dibuat" placeholder="tanggal_dibuat">
                </div>
                <div class="form-group">
                    <label for="tanggal_diperbaharui">Tanggal diperbaharui</label>
                    <input type="date" class="form-control" id="tanggal_diperbaharui" value="{{$pertanyaan->tanggal_diperbaharui}}" name="tanggal_diperbaharui" placeholder="tanggal_diperbaharui">
                </div>
              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Update pertanyaan</button>
              </div>
            </form>
        </div>
    </div>


@endsection