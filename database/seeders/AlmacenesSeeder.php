<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AlmacenesSeeder extends Seeder
{
    public function run()
    {
        $stock_id = DB::table('stocks')->inRandomOrder()->first()->id;

        DB::table('almacenes')->insert([
            'nombre' => 'Almacén Principal',
            'descripcion' => 'Este es el almacén principal que contiene todos los productos.',
            'stock_id' => $stock_id,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('almacenes')->insert([
            'nombre' => 'Almacén Secundario',
            'descripcion' => 'Almacén para productos de menor rotación.',
            'stock_id' => $stock_id,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
