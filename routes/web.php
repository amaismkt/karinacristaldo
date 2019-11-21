<?php

Route::get('/', 'PagesController@index');
Route::get('/home', 'PagesController@index');
Route::get('/sobre', 'PagesController@sobre');
Route::get('/eventos', 'PagesController@eventos');
Route::get('/blog', 'PagesController@blog');
Route::get('/contato', 'PagesController@contato');

Route::post('/publicar-post', 'BlogController@create');
Route::post('/file-upload', 'BlogController@fileUpload');

Route::get('/blog/post/{post}', 'PagesController@post');

Auth::routes();

Route::get('/painel', 'PainelController@index');
Route::get('/painel/blog', 'BlogController@index');
