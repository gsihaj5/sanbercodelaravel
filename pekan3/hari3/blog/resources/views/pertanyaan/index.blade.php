@extends('adminlte.master')

@section('content')


<a href = "/pertanyaan/create" class = "btn btn-primary">Buat Pertanyaan Baru</a>
<table class="table table-bordered">
  <thead>
    <tr>
      <th style="width: 10px">#</th>
      <th>Judul Pertanyaan</th>
      <th>Isi</th>
      <th >Action</th>
    </tr>
  </thead>
  <tbody>
    @forelse($pertanyaan as $key => $post)
        <tr>
          <td>{{$key + 1}}</td>
          <td>{{$post -> judul}}</td>
          <td>{{$post -> isi}}</td>
          <td style = "dipslay:inline;">
            <a class="btn btn-info" href="/pertanyaan/{{$post->id}}">Show</a>
            <a class="btn btn-warning" href="/pertanyaan/{{$post->id}}/edit">Edit</a>
            <form action = "/pertanyaan/{{$post -> id}}" method="post">
            @csrf
            @method('DELETE')
            <input type = "submit" value = "delete" class = "btn btn-danger"> 
            </form>

            </td>
        </tr>
    @empty
        <tr> <td colspan = "4">NO USER! MON MAAP!<td></tr>
    @endforelse

  </tbody>
</table>

@endsection()
