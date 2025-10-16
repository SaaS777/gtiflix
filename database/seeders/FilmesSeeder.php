<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FilmesSeeder extends Seeder
{
    public function run(): void
    {
    DB::table('filmes')->insert(
        [
    ['nome'=>"Corra",
        'descricao'=>"Filme de Negros"],

    ['nome'=>"Nos",
'descricao'=>"Filme de Negros Parecidos"],

    ['nome'=>"Vingadores",
'descricao'=>"Filme de Herois"],

    ['nome'=>"A Morte Te Da Parabens",
'descricao'=>"Filme da morte dando parabens"],

    ['nome'=>"Faça Ela Volta",
'descricao'=>"Filme da mulher querendo a filha de volta"],
        ]
    );
    }
}
