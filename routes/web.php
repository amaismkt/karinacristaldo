<?php

Route::get('/', "PagesController@index");
Route::get('/home', "PagesController@index");
Route::get('/sobre', "PagesController@sobre");
Route::get('/eventos', "PagesController@eventos");
Route::get('/blog', "PagesController@blog");
Route::get('/contato', "PagesController@contato");

Auth::routes();

Route::get('/painel', 'PainelController@index');
