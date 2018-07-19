<?php
// Redireciona para a tela Home
Route::resource('/','ClientesController' );


Route::get('home', 'ClientesController@home');

Route::post('inserirCompra/{id}', 'ClientesController@InserirCompra');

Route::get('eliminarCliente/{id}', 'ClientesController@destroy');

Route::post('editarCliente/{id}', 'ClientesController@update');

Route::get('teste', 'ClientesController@teste');

Route::get ('relatorio','ClientesController@relatorio');

Route::get ('pesquisa','ClientesController@pesq');

Route::get ('compras/{id}','ClientesController@listarCompras');



//log: 70 11:57

