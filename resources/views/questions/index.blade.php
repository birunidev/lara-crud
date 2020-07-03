@extends('adminlte.master')


@section('content')
<div class="card">
      <div class="card-header">
        <h3 class="card-title">Daftar Pertanyaan</h3>
        <a href="question/create" class="btn btn-info float-right">Tambah Pertanyaan</a>       
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
          <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Pertanyaan</th>
            <th>Action</th>
          </tr>
          </thead>
          <tbody>
          
          @foreach($questions as $key => $question)
          <tr>
            <td>{{$key + 1}}</td>
            <td>{{$question->name }}</td>
            <td>{{$question->judul_pertanyaan}}</td>
            <td>
              <a href="/question/{{$question->id}}" class="btn btn-success">Lihat Jawaban</a>
              <a href="/question/edit/{{$question->id}}" class="btn ">Edit</a>
              <a href="/question/delete/{{$question->id}}" class="text-danger">x</a>
            </td>
          </tr>
          @endforeach
          </tfoot>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
@endsection

@push('scripts')
<script src="{{asset('/adminlte/plugins/datatables/jquery.dataTables.js')}}"></script>
<script src="{{asset('/adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>
<script>
  $(function () {
      $("#example1").DataTable();
    });

</script>
@endpush