<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

class AnswerModel {

  // get all answers
  public static function get_answer($pertanyaanId){
    
    $answer = DB::table('answers')->where('pertanyaanId', intval($pertanyaanId))->get();
    return $answer;
  }

  // get an answer

  
  // create an answer
  public static function create($data){
    $new_answer = DB::table('answers')->insert($data);
    return $new_answer;
  }





}