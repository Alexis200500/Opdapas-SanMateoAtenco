<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOficiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oficios', function (Blueprint $table) {
            $table->increments('id_oficio');            
            $table->string('lugar_y_fecha');
            $table->string('numero_oficio');
            $table->string('estatus_oficio');
            $table->string('estatus_acep_oficio');
            $table->string('usuario1_oficio');
            $table->string('usuario2_oficio');
            $table->string('fecha_entrega_oficio');
            $table->string('fecha_limite_oficio');
            $table->string('asunto');
            $table->string('contenido');
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
        Schema::dropIfExists('oficios');
    }
}
