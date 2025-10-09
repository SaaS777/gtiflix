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
    ['nome'=>"Corra"],
    ['nome'=>"Nos"],
    ['nome'=>"Vingadores"],
    ['nome'=>"A Morte Te Da Parabens"],
    ['nome'=>"Faça Ela Volta"],
        ]
    );
    }
}
