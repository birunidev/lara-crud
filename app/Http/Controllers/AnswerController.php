<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\QuestionModel;
use App\Models\AnswerModel;
use Illuminate\Support\Facades\Redirect;

class AnswerController extends Controller
{

    private function formatDateTime($date){
        $pieces = explode(" ", $date);
        return $pieces[0];
    } 

    public function index($questionId){
        $question = QuestionModel::get_one($questionId);
        $answers = AnswerModel::get_answer($questionId);
        
        
        $question->created_at = $this->formatDateTime($question->created_at);
        $question->updated_at = $this->formatDateTime($question->updated_at);

        return view('answers.index', 
            [
            'question' => $question, 
            'answers' => $answers
            ]
        );
    }


   

    public function createNewAnswer(Request $request, $questionId){
        var_dump($questionId);

        $name = $request['name'];
        $jawaban = $request['jawaban'];
        
        $timestamp = date('Y-m-d H:i:s');
        $data = [
            'name' => $name,
            'jawaban'=> $jawaban, 
            'pertanyaanId' => intval($questionId), 
            'created_at' => $timestamp, 
            'updated_at' => $timestamp 
        ];
        $answer = AnswerModel::create($data);
        return Redirect::to('answers/' . $questionId);
    }
}
