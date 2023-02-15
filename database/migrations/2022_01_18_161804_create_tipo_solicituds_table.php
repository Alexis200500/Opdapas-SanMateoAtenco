<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTipoSolicitudsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipo_solicituds', function (Blueprint $table) {
            $table->bigIncrements('id_tipo_solicitud');
            $table->string('nombre_tipo');
            $table->timestamps();
        });

        DB::table("tipo_solicituds")
        ->insert(
            [
            "id_tipo_solicitud" => 1,
            "nombre_tipo" => "Pipa de agua",
            ]);

        DB::table("tipo_solicituds")
        ->insert(
            [
            "id_tipo_solicitud" => 2,
            "nombre_tipo" => "Toma de agua",
            ]);
        
        DB::table("tipo_solicituds")
        ->insert(
            [
            "id_tipo_solicitud" => 3,
            "nombre_tipo" => "Conexion de drenage",
            ]);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tipo_solicituds');
    }
}
