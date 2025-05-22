<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('productos_has_almacenes', function (Blueprint $table) {
            $table->unsignedBigInteger('producto_id');
            $table->unsignedBigInteger('almacen_id');
            $table->timestamps();

            // clave foranea
            $table->foreign('producto_id')->references('id')->on('productos')->onDelete('cascade');
            $table->foreign('almacen_id')->references('id')->on('almacenes')->onDelete('cascade');

            // clave primaria
            $table->primary(['producto_id', 'almacen_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('productos_has_almacenes');
    }
};
