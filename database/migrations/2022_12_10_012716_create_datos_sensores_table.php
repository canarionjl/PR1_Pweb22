<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatosSensoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datos_sensores', function (Blueprint $table) {
            $table->increments("id");

            $table-> integer("sensor_id") -> unsigned();
            $table -> foreign("sensor_id") -> references("id") -> on("sensores");

            $table -> float("valor") -> unsigned();
            $table -> dateTime("fecha",6);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('datos_sensores');
    }
}
