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

            $table-> dateTime("fecha",6);
            $table -> float("importe") -> unsigned();

            $table -> string('paymentId',255)->nullable()->unique();
            $table -> string('token',255)->nullable();
            $table -> string('payerId',255)->nullable();

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
