<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Almacen extends Model
{
    use HasFactory;

    protected $table = 'almacenes';
    protected $fillable = ['nombre', 'descripcion', 'stock_id'];

    public function stock()
    {
        return $this->belongsTo(Stock::class, 'stock_id');
    }

    public function productos()
    {
        return $this->belongsToMany(Producto::class, 'productos_has_almacenes', 'almacen_id', 'producto_id')
            ->withTimestamps();
    }
}
