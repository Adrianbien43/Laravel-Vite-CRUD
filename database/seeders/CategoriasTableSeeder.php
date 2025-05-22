<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class CategoriasTableSeeder extends Seeder
{

    public function run(): void
    {
        DB::table('categorias')->insert([
            [
                'nombre' => 'Categoria 1',
                'descripcion' => 'Observaciones categoria 1',
            ],
            [
                'nombre' => 'Categoria 2',
                'descripcion' => 'Observaciones categoria 2',
            ],
            [
                'nombre' => 'Categoria 3',
                'descripcion' => 'Observaciones categoria 3',
            ],
        ]);
    }
}
