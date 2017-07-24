<?php

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
    return view('home.index');
});

Route::resource('alumnos', 'StudentController');
Route::resource('materias', 'SubjectController');

Route::group(['prefix' => 'alumnos/{id}/'], function(){
  Route::resource('calificaciones', 'ScoreController');
});

#ajax
Route::post('/search', 'HomeController@search');

#partials
Route::get('/result', 'HomeController@result');