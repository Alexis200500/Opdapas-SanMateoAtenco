<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateResponsablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return voidz
     */
    public function up()
    {
        Schema::create('responsables', function (Blueprint $table) {
            $table->bigIncrements('id_responsable');
            $table->string('nombre_responsable');
            $table->timestamps();
        });

        DB::table("responsables")
        ->insert(
            [
                "id_responsable" => 1,
                "nombre_responsable" => "ARZATE MARTINEZ KARLA MARIA",
            ]
        );
        DB::table("responsables")
        ->insert(
            [
                "id_responsable" => 2,
                "nombre_responsable" => "GUTIERREZ ROMERO CLAUDIA GUADALUPE",
            ]
        );
        DB::table("responsables")
        ->insert(
            [
                "id_responsable" => 3,
                "nombre_responsable" => "MARTINEZ SARA RAMIRO PEDRO",
            ]
        );
        DB::table("responsables")
        ->insert(
            [
                "id_responsable" => 4,
                "nombre_responsable" => "NAVARRETE ALBA JOSE DARIO",
            ]
        );
        DB::table("responsables")
        ->insert(
            [
                "id_responsable" => 5,
                "nombre_responsable" => "FLORES PICHARDO ROSA",
            ]
        );
        DB::table("responsables")
        ->insert(
            [
                "id_responsable" => 6,
                "nombre_responsable" => "TORRES ALCANTARA CESAR",
            ]
        );
        DB::table("responsables")
        ->insert(
            [
                "id_responsable" => 7,
                "nombre_responsable" => "SERRANO SOTO EDGARDO",
            ]
        );
        DB::table("responsables")
        ->insert(
            [
                "id_responsable" => 8,
                "nombre_responsable" => "CAMPOS GENARO EMMANUEL",
            ]
        );
        DB::table("responsables")
        ->insert(
            [
                "id_responsable" => 9,
                "nombre_responsable" => "LOPEZ ESCUTIA LUIS FERNANDO",
            ]
        );
        DB::table("responsables")
        ->insert(
            [
                "id_responsable" => 10,
                "nombre_responsable" => "ZARATE SALAZAR IRMA OLIVA",
            ]
        );
        DB::table("responsables")
        ->insert(
            [
                "id_responsable" => 11,
                "nombre_responsable" => "TOSCANO PACHECO ALEJANDRO",
            ]
        );
        DB::table("responsables")
        ->insert(
            [
                "id_responsable" => 12,
                "nombre_responsable" => "FLORES GONZALEZ BATTLING RAYMUNDO",
            ]
        );
        DB::table("responsables")
        ->insert(
            [
                "id_responsable" => 13,
                "nombre_responsable" => "ROMERO GONZALEZ ALVARO",
            ]
        );
        DB::table("responsables")
        ->insert(
            [
                "id_responsable" => 14,
                "nombre_responsable" => "REYES SUAREZ ERICK",
            ]
        );
        DB::table("responsables")
        ->insert(
            [
                "id_responsable" => 15,
                "nombre_responsable" => "CASTAÑEDA GONZALEZ ARMANDO TITO",
            ]
        );
        DB::table("responsables")
        ->insert(
            [
                "id_responsable" => 16,
                "nombre_responsable" => "ANZALDO PORTILLO ROBERTO",
            ]
        );
        DB::table("responsables")
        ->insert(
            [
                "id_responsable" => 17,
                "nombre_responsable" => "HERNANDEZ PATIÑO ANA ELIZABETH",
            ]
        );
        DB::table("responsables")
        ->insert(
            [
                "id_responsable" => 18,
                "nombre_responsable" => "ESCAMILLA ZEPEDA RANDY",
            ]
        );
        DB::table("responsables")
        ->insert(
            [
                "id_responsable" => 19,
                "nombre_responsable" => "GASPAR TORRES RAQUEL",
            ]
        );
        DB::table("responsables")
        ->insert(
            [
                "id_responsable" => 20,
                "nombre_responsable" => "ZEPEDA PEREZ JOSE MANUEL",
            ]
        );
        DB::table("responsables")
        ->insert(
            [
                "id_responsable" => 21,
                "nombre_responsable" => "HIDALGO DE LA GARZA JUAN JOSE",
            ]
        );
        DB::table("responsables")
        ->insert(
            [
                "id_responsable" => 22,
                "nombre_responsable" => "ROMERO CALZADA VICTOR MANUEL",
            ]
        );
        DB::table("responsables")
        ->insert(
            [
                "id_responsable" => 23,
                "nombre_responsable" => "BASURTO GARCIA FRANCISCO JAVIER",
            ]
        );
        DB::table("responsables")
        ->insert(
            [
                "id_responsable" => 24,
                "nombre_responsable" => "ZEPEDA DELGADILLO OMARl",
            ]
        );
        DB::table("responsables")
        ->insert(
            [
                "id_responsable" => 25,
                "nombre_responsable" => "GOMEZ SANCHEZ CHRISTIAN SALVADORl",
            ]
        );
        DB::table("responsables")
        ->insert(
            [
                "id_responsable" => 26,
                "nombre_responsable" => "RIVERA MARTINEZ YRMA OLIVIA",
            ]
        );
        DB::table("responsables")
        ->insert(
            [
                "id_responsable" => 27,
                "nombre_responsable" => "OSORIO FLORES GUSTAVO",
            ]
        );
        DB::table("responsables")
        ->insert(
            [
                "id_responsable" => 28,
                "nombre_responsable" => "NAVA ALVAREZ ADRIANA",
            ]
        );
        DB::table("responsables")
        ->insert(
            [
                "id_responsable" => 29,
                "nombre_responsable" => "PEREZ AMEZCUA RAUL",
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
        Schema::dropIfExists('responsables');
    }
}
