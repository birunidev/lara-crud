<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\QuestionModel;
use Illuminate\Support\Facades\Redirect;

class QuestionController extends Controller
{
    //
    public function index(){
        // get questions from model
        $questions = QuestionModel::get_all();
        
        return view('questions.index', compact('questions'));
    }

    public function createQuestionPage(){
        return view('questions.create');
    }

    public function createNewQuestion(Request $request){

        $nama = $request['nama'];
        $pertanyaan = $request['pertanyaan'];
        $timestamp = date('Y-m-d H:i:s');
        $data = [
            'name' => $nama, 
            'pertanyaan' => $pertanyaan,
            'created_at'=> $timestamp,
            'updated_at' => $timestamp 
        ];

        // save to database
        $saved = QuestionModel::create($data);
        return Redirect::to('questions');
    }
}
