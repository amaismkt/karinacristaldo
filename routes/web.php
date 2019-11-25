<?php

Route::get('/', 'PagesController@index');
Route::get('/home', 'PagesController@index');
Route::get('/sobre', 'PagesController@sobre');
Route::get('/eventos', 'PagesController@eventos');
Route::get('/blog', 'PagesController@blog');
Route::get('/contato', 'PagesController@contato');

Route::get('/blog/post/{post}', 'PagesController@post');
Route::get('/procedimento/{procedimento}', 'PagesController@procedimento');

Route::post('send-email', 'EmailController@send');

Auth::routes();

Route::get('/painel', 'PainelController@index');
Route::get('/painel/blog', 'BlogController@index');
Route::get('/painel/sobre', 'SobreController@index');
Route::get('/painel/blog/posts', 'BlogController@posts');
Route::get('/painel/blog/posts/{post}', 'BlogController@editPost');
Route::get('/painel/blog/posts/delete/{post}', 'BlogController@destroy');
Route::get('/painel/procedimentos/publicar', 'ProcedimentosController@index');
Route::get('/painel/procedimento/edit/{procedimento}', 'ProcedimentosController@editProcedimento');
Route::get('/painel/procedimento/delete/{procedimento}', 'ProcedimentosController@destroy');
Route::get('/painel/procedimentos', 'ProcedimentosController@administrar');

Route::post('/atualizar-post', 'BlogController@update');
Route::post('/publicar-post', 'BlogController@create');
Route::post('/file-upload', 'BlogController@fileUpload');
Route::post('/file-update', 'BlogController@fileUpdate');

Route::post('/about-image-update', 'SobreController@fileUpdate');
Route::post('/about-icon-update', 'SobreController@iconUpdate');
Route::post('/atualizar-sobre', 'SobreController@update');

Route::post('/atualizar-procedimento', 'ProcedimentosController@update');
Route::post('/publicar-procedimento', 'ProcedimentosController@store');
Route::post('/procedimentos-file-upload', 'ProcedimentosController@fileUpload');
Route::post('/procedimentos-file-update', 'ProcedimentosController@fileUpdate');