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

Route::get('/', function () {
    return view('site.app');
});


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