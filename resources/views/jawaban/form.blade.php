@extends('adminlte.master')

@section('content')
    <div class="ml-3 mt-4 mr-3">
        <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Jawaban</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
          
            <form role="form" action="/pertanyaan" method="POST">
              @csrf
              <div class="card-body">
                <div class="form-group">
                  <label for="isi">Isi</label>
                  <textarea cols="40" rows="10" type="text" class="form-control" id="isi" name="isi" placeholder="jawab pertanyaan"></textarea>
                </div>
                <div class="form-group">
                    <label for="tanggal_dibuat">Tanggal dibuat</label>
                    <input type="date" class="form-control" id="tanggal_dibuat" name="tanggal_dibuat" placeholder="tanggal_dibuat">
                </div>
                <div class="form-group">
                    <label for="tanggal_diperbaharui">Tanggal diperbaharui</label>
                    <input type="date" class="form-control" id="tanggal_diperbaharui" name="tanggal_diperbaharui" placeholder="tanggal_diperbaharui">
                </div>
              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
        </div>
    </div>


@endsection