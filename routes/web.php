<?php

use App\Models\Ator;
use App\Models\Genero;
use App\Models\Nacionalidade;
use App\Models\Produtora;
use App\Models\Diretor;
use App\Models\Filmes;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/teste', function () {
    return 'Olá';
});
Route::get('/oi/{texto}', function ($texto) {
    return 'Oi, '. $texto;
});

Route::view('/conheca', 'sobre');


Route::get('/generos', function () {
    $minhaVariavel = Genero::all();
    dd($minhaVariavel);
});

Route::get('/atores', function () {
    $minhaNovaVariavel = Ator::all();
    dd($minhaNovaVariavel);
});

Route::get('/nacionalidades', function() {
    $minhaVariavel = Nacionalidade::all();
    dd($minhaVariavel);
   });

Route::get('/produtoras', function() {
    $minhaVariavel = Produtora::all();
    dd($minhaVariavel);
   });

Route::get('/diretores', function() {
    $minhaVariavel = Diretor::all();
    dd($minhaVariavel);
   });
   Route::get('/filmes', function() {
    $minhaVariavel = Filmes::all();
    dd($minhaVariavel);
   });     