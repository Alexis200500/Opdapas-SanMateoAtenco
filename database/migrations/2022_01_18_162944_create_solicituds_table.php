<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSolicitudsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicituds', function (Blueprint $table) {
            $table->bigIncrements('id_solicitud');
            $table->string('nombre_completo_solicitud');
            $table->string('telefono_solicitud');
            $table->string('nombre_domicilio_solicitud');
            $table->string('calle_solicitud');
            $table->string('numero_domicilio_solicitud');
            $table->string('numero_inmueble');
            $table->biginteger('id_barrio')->unsigned();
            $table->foreign('id_barrio')->references('id_barrio')->on('barrios');
            $table->biginteger('id')->unsigned();
            $table->foreign('id')->references('id')->on('users');
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
        Schema::dropIfExists('solicituds');
    }
}
