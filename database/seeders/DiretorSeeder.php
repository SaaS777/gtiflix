<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DiretorSeeder extends Seeder
{
    public function run(): void
    {
    DB::table('diretores')->insert(
        [
    ['nome'=>"Steven Spielberg"],
    ['nome'=>"Martin Scorsese"],
    ['nome'=>"Quentin Tarantino"],
    ['nome'=>"Christopher Nolan"],
    ['nome'=>"Walter Salles"],
        ]
    );
    }
}
