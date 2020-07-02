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
        <label for="pertanyaan">Mau nanya apa ? </label>
        <textarea id="pertanyaan" type="text" name="pertanyaan" class="form-control form-control-lg" rows="5" ></textarea>
      </div>

      <button type="submit" class="btn btn-primary">Buat Pertanyaan</button>
    </form>
    </div>
  </div>
</div>



@endsection


