<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class StocksTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('stocks')->insert([
            [
                'nombre' => 'Stock 1',
                'descripcion' => 'Este es el stock 1',
            ],
            [
                'nombre' => 'Stock 2',
                'descripcion' => 'Este es el stock 2',
            ],
            [
                'nombre' => 'Stock 3',
                'descripcion' => 'Este es el stock 3',
            ],
        ]);
    }
}
