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

Route::get('/', function () {return view('welcome');});

//rota estudo que quando acessada é redirecionada para a rota contato
  //route::get('/estudo',function() {return redirect()->route('contato');});

//rota contato
 //route::get('/contato/contato1/contato2', function() {return('contato');})->name('contato');


//usado geralmente em formulários
 //route::post('/post', function () {return 'post';});

//aplicação do laravel que permite acessar essa rota(any) em qualquer requisição//
 //route:any('/any', function () {return 'route any';});

route::get('/categoria/{idcat?}', function ($idcat='null') {return "essa é a categoria {$idcat}";});

