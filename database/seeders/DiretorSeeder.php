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
    [
        ['nome'=>"Steven Spielberg",
            'descricao'=>"Steven Spielberg nasceu o 18 de dezembro de 1946 em Cincinnati, Ohio, EUA."],
        ['nome'=>"Martin Scorsese",
    'descricao'=>"Martin Scorsese nasceu o 17 de novembro de 1942 em Queens, Nova York, Nova Iorque, EUA."],
    
        ['nome'=>"Quentin Tarantino",
    'descricao'=>"Quentin Tarantino nasceu o 27 de março de 1963 em Knoxville, Tennessee, EUA."],
    
        ['nome'=>"Christopher Nolan",
    'descricao'=>"Christopher Nolan nasceu o 30 de julho de 1970 em Londres, Inglaterra."],
    
        ['nome'=>"Walter Salles",
    'descricao'=>"Walter Salles nasceu o 12 de abril de 1956 em Rio de Janeiro, Rio de Janeiro, Brasil."],
            ]
        ]
    );
    }
}
