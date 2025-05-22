<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'observaciones', 'precio'];

    public function almacenes()
    {
        return $this->belongsToMany(Almacen::class, 'productos_has_almacenes', 'producto_id', 'almacen_id')
            ->withTimestamps();
    }

    public function categorias()
    {
        return $this->belongsToMany(Categoria::class, 'productos_has_categorias', 'producto_id', 'categoria_id')
            ->withTimestamps();
    }
}
