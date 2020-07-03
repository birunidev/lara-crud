<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

class QuestionModel {


  // get all question
  public static function get_all(){
    $questions = DB::table('questions')->get();
    return $questions;
  }
  
  // get a question
  public static function get_one($id){
    $answer = DB::table('questions')->find($id);
    return $answer;
  }


  
  // create a question
  public static function create($data){
    $new_question = DB::table('questions')->insert($data);
    return $new_question;
  }

  // update a question based on id
  public static function update($data,$questionId){
    $updated_question = DB::table('questions')
              ->where('id', $questionId)
              ->update($data);
    return $updated_question;
  }

  

  // delete a question based on id 
  public static function delete($questionId) {
    $deletedQuestion = DB::table('questions')->where('id', '=', $questionId)->delete();
    return $deletedQuestion;
  }



}