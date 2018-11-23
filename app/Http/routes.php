<?php



Route::get('/', function () {
    return view('vendor.home');
});

Route::group(['middleware' => 'web'], function () {
    Route::auth();
    Route::get('/funcionarios', 'FuncionarioController@index');
    Route::get('/funcionarios/novo', 'FuncionarioController@novo');
    Route::post('/funcionarios/salvar', 'FuncionarioController@salvar');
    Route::get('/pessoas/novo', 'PessoasController@novo');
        
});