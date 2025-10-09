<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProdutoraSeeder extends Seeder
{
    public function run(): void
    {
    DB::table('produtoras')->insert(
        [
    ['nome'=>"DreamWorlds"],
    ['nome'=>"Universal"],
    ['nome'=>"Disney"],
    ['nome'=>"WarnerBros"],
        ]
    );
    }
}
