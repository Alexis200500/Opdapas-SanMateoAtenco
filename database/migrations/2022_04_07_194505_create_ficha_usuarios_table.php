<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFichaUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ficha_usuarios', function (Blueprint $table) {
             $table->increments('id_ficha');
            $table->string('nombre_completo_ficha');
            $table->date('fecha_ficha');
            $table->integer('edad_ficha');
            $table->string('sexo_ficha');
            $table->string('email_ficha')->nullable();
            $table->string('num_casa_ficha')->nullable();
            $table->string('celular_ficha')->nullable();
            $table->string('calle_ficha')->nullable();
            $table->biginteger('id_barrio')->unsigned();
            $table->foreign('id_barrio')->references('id_barrio')->on('barrios');
            $table->string('numero_domicilio_ficha')->nullable();
            $table->string('numero_inmueble_ficha');
            $table->unsignedInteger('id');
            $table->foreign('id')->references('id')->on('usuarios');
            $table->string('status_ficha');
            $table->string('ine_ficha');
            $table->string('curp_ficha');
            $table->string('comprobante_ficha');
            $table->string('maps_ficha');
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
        Schema::dropIfExists('ficha_usuarios');
    }
}
