<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'descripcion'];

    public function productos()
    {
        return $this->belongsToMany(Producto::class, 'productos_has_categorias', 'categoria_id', 'producto_id')
            ->withTimestamps();
    }
}
