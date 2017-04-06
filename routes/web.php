<?php










Route::get('/', function ()
 {
     return view('welcome');
 });


Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/pages','PageController@show');

Route::get('/pages/{page}','PageController@show1');
Route::post('/pagesstore','PageController@store');
Route::get('/pages/{page}/delete','PageController@delete');
Route::get('/pages/{page}/deleteall','PageController@deleteall');


Route::post('/pages/{page}/notesstore','NoteController@store');

Route::get('/notes/{note}/edit','NoteController@edit');
Route::post('/notes/{note}/edit','NoteController@edit');

Route::get('/notes/{note}/delete','NoteController@delete');


