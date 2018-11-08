<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateObrasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('obras', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('archivo')->nullable();
            $table->string('gaveta')->nullable();
            $table->string('expediente')->nullable();
            $table->string('no_obra')->nullable();
            $table->string('registro_de_oficios')->nullable();
            $table->string('fuente_financiera')->nullable();
            $table->string('ejercicio')->nullable();
            $table->text('descripcion_obra')->nullable();
            $table->string('localidad')->nullable();
            $table->string('municipio')->nullable();
            $table->string('aprobado')->nullable();
            $table->string('contratado')->nullable();
            $table->string('modificado')->nullable();
            $table->string('no_contrato')->nullable();
            $table->string('plazo')->nullable();
            $table->string('ejecucion')->nullable();
            $table->string('asignacion')->nullable();
            $table->string('contratista')->nullable();
            $table->date('inicio_programado')->nullable();
            $table->date('termino_programado')->nullable();
            $table->date('inicio_real')->nullable();
            $table->date('termino_real')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('obras');
    }
}
