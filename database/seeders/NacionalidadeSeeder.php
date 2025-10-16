<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NacionalidadeSeeder extends Seeder
{
    public function run(): void
    {
    DB::table('nacionalidades')->insert(
    [
    ['nome'=>"Brasileiro"],
    ['nome'=>"Estadunidense"],
    ['nome'=>"Canadense"],
    ['nome'=>"Argentino"],
    ['nome'=>"Angolano"]
    ]
    );
    }
}