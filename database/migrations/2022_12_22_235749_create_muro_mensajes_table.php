<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMuroMensajesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('muro_mensajes', function (Blueprint $table) {
            $table -> engine='InnoDB';
            $table->increments("id");

            $table -> integer("usuario_id") -> unsigned();
            $table -> foreign("usuario_id") -> references('id') -> on("usuarios");

            $table ->string('content',255)->default('Body of the message');
            $table ->string('titulo',64) -> default('Title');
            $table -> date('date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('muro_mensajes');
    }
}
