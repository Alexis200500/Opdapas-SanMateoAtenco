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
            $table->increments('id');
            $table->string('nombre');
            $table->date('fecha_n');
            $table->integer('edad');
            $table->string('sexo');
            $table->string('image')->nullable();
            $table->string('ine')->nullable();
            $table->string('curp',18)->nullable();
            $table->string('rfc', 13)->nullable();
            $table->string('comdom')->nullable();
            $table->string('facebook')->nullable();
            $table->string('google')->nullable();
            $table->string('email');
            $table->string('num_casa',10);
            $table->string('celular',10);
            $table->string('calle');
            $table->string('calle2');
            $table->string('latitud');
            $table->string('longitud');
            $table->biginteger('id_barrio')->unsigned();
            $table->foreign('id_barrio')->references('id_barrio')->on('barrios');
            $table->string('num_dom');
            $table->string('num_inmueble');
            $table->string('status');
            $table->string('estado_civil');
            $table->string('tipo_inm');
            $table->string('observacion');
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
        Schema::dropIfExists('usuarios');
    }
}
