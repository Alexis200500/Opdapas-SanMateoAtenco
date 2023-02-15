<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSolicitudsMaterialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicituds_materials', function (Blueprint $table) {
            $table->increments('id_material');
            $table->string('nombre_completo_material');
            $table->string('telefono_material');
            $table->string('nombre_domicilio_material');
            $table->biginteger('id_barrio')->unsigned();
            $table->foreign('id_barrio')->references('id_barrio')->on('barrios');
            $table->string('numero_inmueble');
            $table->string('calle_material');
            $table->string('numero_domicilio_material');
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
        Schema::dropIfExists('solicituds_materials');
    }
}
