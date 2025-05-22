<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;


class ProductosTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('productos')->insert([
            [
                'nombre' => 'Producto 1',
                'observaciones' => 'Observaciones del producto 1',
                'precio' => 10.99,
            ],
            [
                'nombre' => 'Producto 2',
                'observaciones' => 'Observaciones del producto 2',
                'precio' => 20.99,
            ],
            [
                'nombre' => 'Producto 3',
                'observaciones' => 'Observaciones del producto 3',
                'precio' => 30.99,
            ],
        ]);
    }
}
