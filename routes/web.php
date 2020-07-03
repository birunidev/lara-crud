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
Route::get('/question/edit/{questionId}', 'QuestionController@updateQuestionPage');
Route::post('/question/update/{questionId}', 'QuestionController@updateAQuestion');

Route::get('/question/delete/{questionId}', 'QuestionController@deleteQuestionPage');
Route::post('/question/delete/{questionId}', 'QuestionController@deleteQuestion');



Route::get('/question/{questionId}', 'AnswerController@index');
Route::post('/answers/{questionId}', 'AnswerController@createNewAnswer');
