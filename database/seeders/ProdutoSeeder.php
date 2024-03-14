<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 10; $i++){
            DB::table('produtos')->insert([
                'descricao' => Str::random(10),
                'categoria' => Str::random(10),
                'preco' => rand(100, 1000),
                'qtd' => rand(100, 1000),
            ]);
        }
    }
}
