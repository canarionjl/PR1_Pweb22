<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosPedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos_pedidos', function (Blueprint $table) {
            $table -> engine='InnoDB';
            $table-> increments("id");

            $table -> integer("productoUsuario_id") -> unsigned();
            $table -> foreign("productoUsuario_id") -> references("id") -> on("productos_usuarios");

            $table -> integer("pedido_id") -> unsigned();
            $table -> foreign("pedido_id")-> references ("id") -> on ("pedidos");


            $table-> integer("cantidad") -> unsigned();
            $table -> float("precio") -> unsigned();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos_pedidos');
    }
}
