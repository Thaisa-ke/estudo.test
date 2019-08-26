<?php

//Route::get('/', function () {return view('welcome');});

//rota estudo que quando acessada é redirecionada para a rota contato
  //route::get('/estudo',function() {return redirect()->route('contato');});

//rota contato
 //route::get('/contato/contato1/contato2', function() {return('contato');})->name('contato');


//usado geralmente em formulários
 //route::post('/post', function () {return 'post';});

//aplicação do laravel que permite acessar essa rota(any) em qualquer requisição//
 //route:any('/any', function () {return 'route any';});

//route::get('/categoria/{idcat?}', function ($idcat='null') {return "essa é a categoria {$idcat}";});

route::resource('/painel/produto', 'Painel\ProdutoController');


route::group(['namespace' => 'Site'], function (){
    route::get('/', 'SiteController@index');
    route::get('/contato', 'SiteController@contato');

    route::get('/categoria','SiteController@categoria');
    route::get('/categoria1/{id?}','SiteController@categoriaOp');
});
