<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormSolisitudsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form_solicitud', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre_solicitud');
            $table->string('fecha_solicitud');
            $table->string('fecha_limite');

            $table->biginteger('id_responsable')->unsigned();
            $table->foreign('id_responsable')->references('id_responsable')->on('responsables');
            
            $table->string('calle_solicitud');
            $table->string('no_solicitud');

            $table->biginteger('id_barrio')->unsigned();
            $table->foreign('id_barrio')->references('id_barrio')->on('barrios');
            
            $table->integer('cp_solicitud');
            $table->string('telefono_solicitud');
            $table->string('caracater_solicitud');
            $table->string('calle_in_solicitud');
            $table->string('no_in_solicitud');
            $table->integer('cp_in_solicitud');
            $table->string('clave_solicitud');
            $table->string('superficie_pred_solicitud');
            $table->string('superficie_const_solicitud');

            $table->biginteger('id_barrio2')->unsigned();
            $table->foreign('id_barrio2')->references('id_barrio')->on('barrios');


            $table->string('servicoal');
            $table->string('motivo_solicitud');
            $table->integer('no_tomas');
            $table->string('diametro_toma');
            $table->integer('no_bene_toma');
            $table->integer('no_descarga');
            $table->string('diametro_descarga');
            $table->string('activo',2);
            $table->string('servicio');
            $table->softDeletes();
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
        Schema::dropIfExists('form_solicitud');
    }
}





