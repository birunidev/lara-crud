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
    public function updateQuestionPage($questionId){

        $question = QuestionModel::get_one($questionId);
        return view('questions.edit', ['question' => $question]);
    }

    public function deleteQuestionPage($questionId){
        
        return view('questions.delete', ['questionId' => $questionId]);
    }

    public function createNewQuestion(Request $request){

        $nama = $request['nama'];
        $judul = $request['judul_pertanyaan'];
        $isi = $request['isi_pertanyaan'];

        $timestamp = date('Y-m-d H:i:s');
        $data = [
            'name' => $nama, 
            'judul_pertanyaan' => $judul,
            'isi_pertanyaan' => $isi,
            'created_at'=> $timestamp,
            'updated_at' => $timestamp 
        ];

        // save to database
        $saved = QuestionModel::create($data);
        return Redirect::to('questions');
    }

    public function updateAQuestion(Request $request, $questionId){

        $nama = $request['nama'];
        $judul = $request['judul_pertanyaan'];
        $isi = $request['isi_pertanyaan'];
        $updated = date('Y-m-d H:i:s');

        $data = [
            'name' => $nama, 
            'judul_pertanyaan' => $judul,
            'isi_pertanyaan' => $isi,
            'updated_at' => $updated 
        ];

        // save to database
        $saved = QuestionModel::update($data, intval($questionId));
        return Redirect::to('questions');
    }


   

    public function deleteQuestion($questionId) {
        $deleted = QuestionModel::delete($questionId);
        return Redirect::to('questions');
    }


}
