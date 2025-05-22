<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'descripcion'];

    public function almacen()
    {
        return $this->hasOne(Almacen::class, 'stock_id');
    }
}
