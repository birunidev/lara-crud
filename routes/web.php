<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// get the question page
Route::get('/questions', 'QuestionController@index' );
Route::get('/question/create', 'QuestionController@createQuestionPage');
Route::post('/question', 'QuestionController@createNewQuestion');

Route::get('/answers/{questionId}', 'AnswerController@index');
Route::post('/answers/{questionId}', 'AnswerController@createNewAnswer');
