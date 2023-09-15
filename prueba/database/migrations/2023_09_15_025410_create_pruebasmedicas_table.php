<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pruebasmedicas', function (Blueprint $table) {
            $table->id('id_prueba');
            $table->string('nombre');
            $table->string('tipo');
            $table->string('costo');
            $table->string('tiempo_resultado');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pruebasmedicas');
    }
};
