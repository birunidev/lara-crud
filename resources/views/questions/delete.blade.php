@extends('adminlte.master')


@section('content')

<div class="row m-4">
  <div class="col-md-12">
  <h1>Apakah anda yakin ?</h1>

  
  <form action="/question/delete/{{$questionId}}" method="POST">
    @csrf
    <a href="/question/{{$questionId}}" class="btn mr-4"> Tidak</a>
    <button class="btn btn-danger" type="submit"> Iya </button>

  </form>
  </div>
</div>

@endsection

