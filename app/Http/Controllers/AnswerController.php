<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\QuestionModel;
use App\Models\AnswerModel;
use Illuminate\Support\Facades\Redirect;

class AnswerController extends Controller
{
    public function index($questionId){
        $question = QuestionModel::get_one($questionId);
        $answers = AnswerModel::get_answer($questionId);
        
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
