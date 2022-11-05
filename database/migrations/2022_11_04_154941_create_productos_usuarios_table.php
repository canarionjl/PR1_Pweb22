<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos_usuarios', function (Blueprint $table) {
            $table -> engine='InnoDB';
            $table->increments("id");

            $table -> integer("producto_id") -> unsigned();
            $table -> foreign("producto_id") -> references('id') -> on("productos");

            $table -> integer("usuario_id") -> unsigned();
            $table -> foreign("usuario_id") -> references('id') -> on("usuarios");

            $table->integer("cantidad")->unsigned();
            $table -> float ("precio") -> unsigned();
            $table -> integer ("equivalenciaGrUnidad")-> unsigned() -> default(1);
            $table -> enum("unidad",["manojo","racimo","gramos","puñado","caja","bandeja"]) -> default("gramos");


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos_usuarios');
    }
}
