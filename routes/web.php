<?php
//Apresenta tela de login
Route::resource('/','ClientesController' );

//apresente a tela de inserir compra
Route::get('inserirCompra', 'ClientesController@telaInserirCompra');

Route::get('home', 'ClientesController@home');

Route::post('inserirCompra/{id}', 'ClientesController@InserirCompra');

Route::get('eliminarCliente/{id}', 'ClientesController@destroy');

Route::post('pesquisar', 'ClientesController@pesquisar');

Route::get('telaPesquisar', function () {
    return view('telaPesquisar');
});

Route::get('telaEditarCliente/{id}', 'ClientesController@edit');

Route::post('editarCliente/{id}', 'ClientesController@update');

Route::get('teste', 'ClientesController@teste');



//log: 70 11:57

