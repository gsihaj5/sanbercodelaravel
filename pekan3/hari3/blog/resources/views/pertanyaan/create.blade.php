@extends('adminlte.master')

@section('content')
<div class="card card-primary ml-3 mt-3 mr-3">
  <div class="card-header">
    <h3 class="card-title">Buat Pertanyaan baru</h3>
  </div>
  <!-- /.card-header -->
  <!-- form start -->
  <form action="/pertanyaan" method = "post">
    @csrf
    <div class="card-body">
        @if(session('success'))
            <div class = 'alert alert-success'>
                {{session('success')}}
            </div>

        @endif
      <div class="form-group">
        <label for="inputJudul">Judul Pertanyaan</label>
        <input type="text" class="form-control" id="inputJudul" placeholder="Masukan Judul" name = "judul">
      </div>
      <div class="form-group">
        <label for="inputIsi">Isi Pertanyaan</label>
        <input type="text" class="form-control" id="inputIsi" placeholder="Masukan Isi" name = "isi">
      </div>
    </div>

    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>
</div>
@endsection()
