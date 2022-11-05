<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table -> engine='InnoDB';
            $table-> increments("id") -> unsigned();

            $table -> integer("comprador_id") -> unsigned();
            $table -> foreign("comprador_id") -> references("id") -> on("usuarios");

            $table -> integer("vendedor_id") -> unsigned();
            $table -> foreign("vendedor_id") -> references("id") -> on("usuarios");

            $table-> dateTime("fecha",6);
            $table -> float("importe") -> unsigned();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pedidos');
    }
}
