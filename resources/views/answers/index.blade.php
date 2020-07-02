@extends('adminlte.master')


@section('content')
  <div class="container">
    <div class="row p-4">
      <div class="col-md-6">

  <a href="/questions" class="d-block mb-4">Kembali ke daftar pertanyaan</a>
        <p>Pertanyaan : </p>
       
        <h3>{{$question->pertanyaan}} </h3>
      </div>
      <div class="w-100 my-2"></div>
      <div class="col-md-6 my-3">
            Total Jawaban : {{count($answers)}}
      </div>
      <div class="w-100"></div>
      </div>

      @if (count($answers) === 0)
      <div class="row p-4">
        <div class="col-md-6">
          <p>Tidak ada jawaban untuk pertanyaan ini</p>
          <a href="#answerForm" class="btn btn-info">Jawab pertanyaan</a>
        </div>
      </div>
      
      @else 
        @foreach($answers as $key => $answer)
        
          
            <div class="media border m-3 p-3 w-50">
                <div class="media-body">
                  <h5 class="mt-0">{{$answer->name}}</h5>
                  {{$answer->jawaban}}
                </div>
            </div>
          
          
        @endforeach
      @endif
    <div class="row p-4">
    <div class="col-md-12">
      <h4>Tambah Jawabanmu disini</h4>
    </div>
    <div class="col-md-6">
      <form id="answerForm" action="/answers/{{$question->id}}" method="POST">
        @csrf
          <div class="form-group">
            <label for="name">Nama kamu ?</label>
            <input id="name" name="name" type="text" class="form-control form-control-lg">
          </div>
          <div class="form-group">
            <label for="jawaban">Jawaban mu ?</label>
            <textarea  id="jawaban" rows="5" name="jawaban" type="text" class="form-control form-control-lg"></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Tambah Jawaban</button>
        </form>
    </div>
    
    </div>
  </div>
  
@endsection

