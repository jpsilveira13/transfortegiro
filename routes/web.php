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

Route::get('/', 'SiteController@site');


Route::get('/sobre',function (){
   return view('site.sobre');
});


Route::get('/servicos',function (){
    return view('site.servicos');
});


Route::get('/contato',function (){
    return view('site.contato');
});

Route::get('/galeria-fotos',function (){
    return view('site.galeria_fotos');
});

Route::name('solo.equipamento')->get('/equipamentos/{url_nome}','SiteController@equipamentos');
Route::name('equipamentos')->get('/equipamentos/{url_nome?}/{url_equipamento}','SiteController@equipamento');

Route::name('orcamento')->get('/orcamento/{nome_equipameto}','SiteController@orcamento');