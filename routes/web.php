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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('teacher','TeacherController');
Route::resource('subject','SubjectController');
Route::resource('student','StudentController');
Route::resource('score','ScoreController');
Route::resource('achievement','AchievementController');
Route::resource('skill','SkillController');
Route::resource('activity','ActivityController');
Route::resource('cv','CvController');
Route::resource('path','PathController');
Route::resource('path_subject','PathSubjectController');
Route::resource('career','CareerController');
Route::resource('subject_career','SubjectCareerController');
Route::resource('test','TestController');
Route::patch('student', 'StudentController@update');
Route::name('print')->get('export', 'ExportController@export');
Route::resource('university','UniversityController');
Route::resource('taller','TallerController');
Route::get('/paypal/pay', 'PaymentController@payWithPayPal');
Route::get('/paypal/status', 'PaymentController@payPalStatus');
Route::resource('payment','PaymentController');
Route::resource('message','MessageController');
Route::resource('exam','EvaluationController');
