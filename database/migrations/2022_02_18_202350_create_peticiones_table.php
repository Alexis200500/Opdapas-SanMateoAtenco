<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeticionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peticiones', function (Blueprint $table) {
            $table->increments('id_peticion');
            $table->string('nombre_completo_peticion');
            $table->string('telefono_peticion',10);
            $table->biginteger('id_barrio')->unsigned();
            $table->foreign('id_barrio')->references('id_barrio')->on('barrios');
            $table->string('calle_peticion');
            $table->integer('numero_domicilio_peticion');
            $table->integer('numero_inmueble_peticion');
            $table->date('fecha_peticion');
            $table->integer('id')->unsigned();
            $table->foreign('id')->references('id')->on('usuarios');
            $table->string('descripcion_detalle_peticion');
            $table->biginteger('id_responsable')->unsigned();
            $table->foreign('id_responsable')->references('id_responsable')->on('responsables');
            $table->biginteger('id_area')->unsigned();
            $table->foreign('id_area')->references('id_area')->on('areas');
            $table->date('fecha_detalle_peticion');
            $table->string('prioridad_peticion');
            $table->string('status_peticion');
            $table->string('status_info_peticion');
            $table->string('desarrollo_info_peticion');
            $table->string('reporte_info_peticion');
            $table->string('validacion_info_peticion');
            $table->string('avance_peticion');
            $table->string('respuesta_peticion');
            $table->string('ovservacion_peticion');
            $table->string('respuest_peticion');
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('peticiones');
    }
}

