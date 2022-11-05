<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
                $table -> engine='InnoDB';
                $table->increments('id');

                $table->string('nombre',255)
                    -> default('Usuario');

            $table->string('email',255)
                -> default('usuario@example.es');

                $table->string('password',255);
                $table->string('telefono',255) -> default(null);

                $table->enum('tipoUsuario',['Productor','Vendedor','Cliente']) -> default('Cliente');

                $table->string('direccion',255);
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
}
