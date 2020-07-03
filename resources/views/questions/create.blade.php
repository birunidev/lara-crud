@extends('adminlte.master')

@section('content')
<div class="container">
  <div class="row p-5">
    <div class="col-md-6">
    <form action="/question" method="POST">
    @csrf
      <div class="form-group">
        <label for="nama">Nama kamu ?</label>
        <input type="text" id="nama" name="nama"  class="form-control form-control-lg">
      </div>
      <div class="form-group">
        <label for="judul_pertanyaan">Judul Pertanyaan ? </label>
        <input id="judul_pertanyaan" type="text" name="judul_pertanyaan" class="form-control form-control-lg" >
      </div>
      <div class="form-group">
        <label for="isi_pertanyaan">Isi Pertanyaan ? </label>
        <textarea id="isi_pertanyaan" rows="5" type="text" name="isi_pertanyaan" class="form-control form-control-lg" ></textarea>
      </div>

      <button type="submit" class="btn btn-primary">Buat Pertanyaan</button>
    </form>
    </div>
  </div>
</div>



@endsection


