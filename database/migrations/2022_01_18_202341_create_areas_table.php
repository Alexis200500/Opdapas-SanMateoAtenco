<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAreasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('areas', function (Blueprint $table) {
            $table->bigIncrements('id_area');
            $table->string('nombre_area');
            $table->timestamps();
        });

        DB::table("areas")
        ->insert(
            [
                "id_area" => 1,
                "nombre_area" => "Dirección General",
            ]
        );
        DB::table("areas")
        ->insert(
            [
                "id_area" => 2,
                "nombre_area" => "Dirección  de Vinculación Interinstitucional",
            ]
        );
        DB::table("areas")
        ->insert(
            [
                "id_area" => 3,
                "nombre_area" => "Cumplimniento Normativo y Transparencia",
            ]
        );
        DB::table("areas")
        ->insert(
            [
                "id_area" => 4,
                "nombre_area" => "UIPP",
            ]
        );
        DB::table("areas")
        ->insert(
            [
                "id_area" => 5,
                "nombre_area" => "Coordinacion de Ingresos",
            ]
        );

        DB::table("areas")
        ->insert(
            [
                "id_area" => 6,
                "nombre_area" => "Recursos Humanos",
            ]
        );

        DB::table("areas")
        ->insert(
            [
                "id_area" => 7,
                "nombre_area" => "Direccion de Administracion y Finanzas",
            ]
        );

        DB::table("areas")
        ->insert(
            [
                "id_area" => 8,
                "nombre_area" => "Comunicación",
            ]
        );

        DB::table("areas")
        ->insert(
            [
                "id_area" => 9,
                "nombre_area" => "Cultura del Agua",
            ]
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('areas');
    }
}
