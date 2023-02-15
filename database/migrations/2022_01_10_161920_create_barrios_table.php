x<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateBarriosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barrios', function (Blueprint $table) {
            $table->bigIncrements('id_barrio');
            $table->string('nombre_barrio');
            $table->timestamps();
        });

        DB::table("barrios")
        ->insert(
            [
            "id_barrio" => 1,
            "nombre_barrio" => "Acantto Torre Azari",
            ]);
        DB::table("barrios")
        ->insert(
            [
            "id_barrio" => 2,
            "nombre_barrio" => "Alborada",
            ]);
        DB::table("barrios")
        ->insert(
            [
            "id_barrio" => 3,
            "nombre_barrio" => "Alborada 2",
            ]);
        DB::table("barrios")
        ->insert(
            [
            "id_barrio" => 4,
            "nombre_barrio" => "Alborada 3",
            ]);
        DB::table("barrios")
        ->insert(
            [
            "id_barrio" => 5,
            "nombre_barrio" => "Alborada 4",
            ]);

        DB::table("barrios")
        ->insert(
            [
            "id_barrio" => 6,
            "nombre_barrio" => "Alvaro Obregon",
            ]);

        DB::table("barrios")
        ->insert(
            [
            "id_barrio" => 7,
            "nombre_barrio" => "Araucaria 1",
            ]);

        DB::table("barrios")
        ->insert(
            [
            "id_barrio" => 8,
            "nombre_barrio" => "Araucaria 2",
            ]);

        DB::table("barrios")
        ->insert(
            [
            "id_barrio" => 9,
            "nombre_barrio" => "Barrio De Guadalupe",
            ]);

        DB::table("barrios")
        ->insert(
            [
            "id_barrio" => 10,
            "nombre_barrio" => "Barrio De La Concepcion",
            ]);

        DB::table("barrios")
        ->insert(
            [
            "id_barrio" => 11,
            "nombre_barrio" => "Barrio De La Magdalena",
            ]);

        DB::table("barrios")
        ->insert(
            [
            "id_barrio" => 12,
            "nombre_barrio" => "Barrio De San Francisco",
            ]);

            DB::table("barrios")
            ->insert(
                [
                "id_barrio" => 13,
                "nombre_barrio" => "Barrio De San Isidro",
                ]);

            DB::table("barrios")
            ->insert(
                [
                "id_barrio" => 14,
                "nombre_barrio" => "Barrio De San Juan",
                ]);

            DB::table("barrios")
            ->insert(
                [
                "id_barrio" => 15,
                "nombre_barrio" => "Barrio De San Lucas",
                ]);

            DB::table("barrios")
            ->insert(
                [
                "id_barrio" => 16,
                "nombre_barrio" => "Barrio De San Miguel",
                ]);

            DB::table("barrios")
            ->insert(
                [
                "id_barrio" => 17,
                "nombre_barrio" => "Barrio De San Nicolas",
                ]);

            DB::table("barrios")
            ->insert(
                [
                "id_barrio" => 18,
                "nombre_barrio" => "BARRIO DE SAN PEDRO",
                ]);

            DB::table("barrios")
            ->insert(
                [
                "id_barrio" => 19,
                "nombre_barrio" => "Barrio De Santa Maria",
                ]);

            DB::table("barrios")
            ->insert(
                [
                "id_barrio" => 20,
                "nombre_barrio" => "Barrio De Santiago",
                ]);

            DB::table("barrios")
            ->insert(
                [
                "id_barrio" => 21,
                "nombre_barrio" => "Bosques Botuna",
                ]);

            DB::table("barrios")
            ->insert(
                [
                "id_barrio" => 22,
                "nombre_barrio" => "Cantera Mil 3",
                ]);

            DB::table("barrios")
            ->insert(
                [
                "id_barrio" => 23,
                "nombre_barrio" => "Casa Magna Privada 1",
                ]);

            DB::table("barrios")
            ->insert(
                [
                "id_barrio" => 24,
                "nombre_barrio" => "Chapultec I",
                ]);

            DB::table("barrios")
            ->insert(
                [
                "id_barrio" => 25,
                "nombre_barrio" => "Cipreses II",
                ]);

            DB::table("barrios")
            ->insert(
                [
                "id_barrio" => 26,
                "nombre_barrio" => "Colonia Alvaro Obregon",
                ]);

            DB::table("barrios")
            ->insert(
                [
                "id_barrio" => 27,
                "nombre_barrio" => "Colonia Buenavista",
                ]);

            DB::table("barrios")
            ->insert(
                [
                "id_barrio" => 28,
                "nombre_barrio" => "Colonia Reforma",
                ]);

            DB::table("barrios")
            ->insert(
                [
                "id_barrio" => 29,
                "nombre_barrio" => "Condominio Concepto 1010",
                ]);

            DB::table("barrios")
            ->insert(
                [
                "id_barrio" => 30,
                "nombre_barrio" => "Condominio Horizontal Habitacional Residencial",
                ]);

            DB::table("barrios")
            ->insert(
                [
                "id_barrio" => 31,
                "nombre_barrio" => "Condominio Horizontal Las Herencias",
                ]);

            DB::table("barrios")
            ->insert(
                [
                "id_barrio" => 32,
                "nombre_barrio" => "Condominio Horizontal Primavera",
                ]);

            DB::table("barrios")
            ->insert(
                [
                "id_barrio" => 33,
                "nombre_barrio" => "Conjunto Vitalia I",
                ]);

            DB::table("barrios")
            ->insert(
                [
                "id_barrio" => 34,
                "nombre_barrio" => "Conjunto Vitalia II",
                ]);

            DB::table("barrios")
            ->insert(
                [
                "id_barrio" => 35,
                "nombre_barrio" => "Diamante",
                ]);

            DB::table("barrios")
            ->insert(
                [
                "id_barrio" => 36,
                "nombre_barrio" => "Don Samuel",
                ]);

            DB::table("barrios")
            ->insert(
                [
                "id_barrio" => 37,
                "nombre_barrio" => "El Dorado II",
                ]);

            DB::table("barrios")
            ->insert(
                [
                "id_barrio" => 38,
                "nombre_barrio" => "El Secreto",
                ]);

            DB::table("barrios")
            ->insert(
                [
                "id_barrio" => 39,
                "nombre_barrio" => "Emiliano Zapata",
                ]);

            DB::table("barrios")
            ->insert(
                [
                "id_barrio" => 40,
                "nombre_barrio" => "Esmeralda 1",
                ]);

            DB::table("barrios")
            ->insert(
                [
                "id_barrio" => 41,
                "nombre_barrio" => "Esmeralda 2",
                ]);

            DB::table("barrios")
            ->insert(
                [
                "id_barrio" => 42,
                "nombre_barrio" => "Esmeralda 3",
                ]);

            DB::table("barrios")
            ->insert(
                [
                "id_barrio" => 43,
                "nombre_barrio" => "Espacio Dos",
                ]);

            DB::table("barrios")
            ->insert(
                [
                "id_barrio" => 44,
                "nombre_barrio" => "Espacio Uno",
                ]);

            DB::table("barrios")
            ->insert(
                [
                "id_barrio" => 45,
                "nombre_barrio" => "Fenix",
                ]);

            DB::table("barrios")
            ->insert(
                [
                "id_barrio" => 46,
                "nombre_barrio" => "Fenix 5",
                ]);

            DB::table("barrios")
            ->insert(
                [
                "id_barrio" => 47,
                "nombre_barrio" => "Fenix IV",
                ]);

            DB::table("barrios")
            ->insert(
                [
                "id_barrio" => 48,
                "nombre_barrio" => "Florencia 1 Residencial",
                ]);

            DB::table("barrios")
            ->insert(
                [
                "id_barrio" => 49,
                "nombre_barrio" => "FRACC. Atentli",
                ]);

            DB::table("barrios")
            ->insert(
                [
                "id_barrio" => 50,
                "nombre_barrio" => "FRACC. El  Cortijo",
                ]);

            DB::table("barrios")
            ->insert(
                [
                "id_barrio" => 51,
                "nombre_barrio" => "FRACC. Hacienda Santa Maria",
                ]);

            DB::table("barrios")
            ->insert(
                [
                "id_barrio" => 52,
                "nombre_barrio" => "FRACC. Los Cedros",
                ]);

            DB::table("barrios")
            ->insert(
                [
                "id_barrio" => 53,
                "nombre_barrio" => "FRACC. Venus",
                ]);

            DB::table("barrios")
            ->insert(
                [
                "id_barrio" => 54,
                "nombre_barrio" => "FRACC. Aqua",
                ]);

            DB::table("barrios")
            ->insert(
                [
                "id_barrio" => 55,
                "nombre_barrio" => "FRACC. Arboleda",
                ]);

            DB::table("barrios")
            ->insert(
                [
                "id_barrio" => 56,
                "nombre_barrio" => "FRACC. Don Eloy I",
                ]);

            DB::table("barrios")
            ->insert(
                [
                "id_barrio" => 57,
                "nombre_barrio" => "FRACC. Don Eloy II",
                ]);

            DB::table("barrios")
            ->insert(
                [
                "id_barrio" => 58,
                "nombre_barrio" => "FRACC. Don Eloy III",
                ]);

            DB::table("barrios")
            ->insert(
                [
                "id_barrio" => 59,
                "nombre_barrio" => "FRACC. El Dorado I",
                ]);

            DB::table("barrios")
            ->insert(
                [
                "id_barrio" => 60,
                "nombre_barrio" => "FRACC. El Encanto",
                ]);

            DB::table("barrios")
            ->insert(
                [
                "id_barrio" => 61,
                "nombre_barrio" => "FRACC. El Encanto II",
                ]);

            DB::table("barrios")
            ->insert(
                [
                "id_barrio" => 62,
                "nombre_barrio" => "FRACC. El Fenix I",
                ]);

            DB::table("barrios")
            ->insert(
                [
                "id_barrio" => 63,
                "nombre_barrio" => "FRACC. El Fenix II",
                ]);

            DB::table("barrios")
            ->insert(
                [
                "id_barrio" => 64,
                "nombre_barrio" => "FRACC. El Fenix III",
                ]);

            DB::table("barrios")
            ->insert(
                [
                "id_barrio" => 65,
                "nombre_barrio" => "FRACC. El Fortin",
                ]);

            DB::table("barrios")
            ->insert(
                [
                "id_barrio" => 66,
                "nombre_barrio" => "FRACC. El Rosedal",
                ]);

            DB::table("barrios")
            ->insert(
                [
                "id_barrio" => 67,
                "nombre_barrio" => "FRACC. El Secreto",
                ]);

            DB::table("barrios")
            ->insert(
                [
                "id_barrio" => 68,
                "nombre_barrio" => "FRACC. Grafito",
                ]);

            DB::table("barrios")
            ->insert(
                [
                "id_barrio" => 69,
                "nombre_barrio" => "FRACC. La Joya",
                ]);

            DB::table("barrios")
            ->insert(
                [
                "id_barrio" => 70,
                "nombre_barrio" => "FRACC. La Magdalena I",
                ]);

            DB::table("barrios")
            ->insert(
                [
                "id_barrio" => 71,
                "nombre_barrio" => "FRACC. La Magdalena II",
                ]);

            DB::table("barrios")
            ->insert(
                [
                "id_barrio" => 72,
                "nombre_barrio" => "FRACC. La Magdalena III",
                ]);

             DB::table("barrios")
            ->insert(
                [
                "id_barrio" => 73,
                "nombre_barrio" => "FRACC. Leno",
                ]);

             DB::table("barrios")
            ->insert(
                [
                "id_barrio" => 74,
                "nombre_barrio" => "FRACC. OLMOS",
                ]);

             DB::table("barrios")
            ->insert(
                [
                "id_barrio" => 75,
                "nombre_barrio" => "Fraccionamiento Premier",
                ]);

             DB::table("barrios")
            ->insert(
                [
                "id_barrio" => 76,
                "nombre_barrio" => "Fraccionamiento Premier I",
                ]);

             DB::table("barrios")
            ->insert(
                [
                "id_barrio" => 77,
                "nombre_barrio" => "Fraccionamiento Quinta Critina",
                ]);

             DB::table("barrios")
            ->insert(
                [
                "id_barrio" => 78,
                "nombre_barrio" => "Fraccionamiento Residencial Cipres",
                ]);

             DB::table("barrios")
            ->insert(
                [
                "id_barrio" => 79,
                "nombre_barrio" => "Fraccioanmiento Rinconada San Mateo",
                ]);

             DB::table("barrios")
            ->insert(
                [
                "id_barrio" => 80,
                "nombre_barrio" => "Fraccionamiento San Angel II",
                ]);

             DB::table("barrios")
            ->insert(
                [
                "id_barrio" => 81,
                "nombre_barrio" => "Fraccionamiento San Angel III",
                ]);

             DB::table("barrios")
            ->insert(
                [
                "id_barrio" => 82,
                "nombre_barrio" => "Fraccionamiento San Carlos",
                ]);

             DB::table("barrios")
            ->insert(
                [
                "id_barrio" => 83,
                "nombre_barrio" => "Fraccionamiento San Roman I",
                ]);

             DB::table("barrios")
            ->insert(
                [
                "id_barrio" => 84,
                "nombre_barrio" => "Fraccionamiento Santa Elena",
                ]);

             DB::table("barrios")
            ->insert(
                [
                "id_barrio" => 85,
                "nombre_barrio" => "Fraccionamiento Santa Maria",
                ]);

             DB::table("barrios")
            ->insert(
                [
                "id_barrio" => 86,
                "nombre_barrio" => "Fraccionamiento Venus",
                ]);

             DB::table("barrios")
            ->insert(
                [
                "id_barrio" => 87,
                "nombre_barrio" => "Fraccionamiento Villas De Atenco",
                ]);

             DB::table("barrios")
            ->insert(
                [
                "id_barrio" => 88,
                "nombre_barrio" => "Fraccionamiento Villas La Magdalena 5",
                ]);

             DB::table("barrios")
            ->insert(
                [
                "id_barrio" => 89,
                "nombre_barrio" => "Fraccionamiento Vista Verde",
                ]);

             DB::table("barrios")
            ->insert(
                [
                "id_barrio" => 90,
                "nombre_barrio" => "Fracccionamiento Villas La Magdalena 6",
                ]);

             DB::table("barrios")
            ->insert(
                [
                "id_barrio" => 91,
                "nombre_barrio" => "Francisco I Madero",
                ]);

             DB::table("barrios")
            ->insert(
                [
                "id_barrio" => 92,
                "nombre_barrio" => "Fuentes De Cibeles",
                ]);

             DB::table("barrios")
            ->insert(
                [
                "id_barrio" => 93,
                "nombre_barrio" => "Fuentes De Diana",
                ]);

             DB::table("barrios")
            ->insert(
                [
                "id_barrio" => 94,
                "nombre_barrio" => "Grafito 2",
                ]);

            DB::table("barrios")
            ->insert(
                [
                "id_barrio" => 95,
                "nombre_barrio" => "Grupo IXTOC",
                ]);

            DB::table("barrios")
            ->insert(
                [
                "id_barrio" => 96,
                "nombre_barrio" => "Guadalupe",
                ]);

            DB::table("barrios")
            ->insert(
                [
                "id_barrio" => 97,
                "nombre_barrio" => "Hacienda Real I",
                ]);

            DB::table("barrios")
            ->insert(
                [
                "id_barrio" => 98,
                "nombre_barrio" => "Hacienda Real II",
                ]);

            DB::table("barrios")
            ->insert(
                [
                "id_barrio" => 99,
                "nombre_barrio" => "HDA. Santa Maria",
                ]);

            DB::table("barrios")
            ->insert(
                [
                "id_barrio" => 100,
                "nombre_barrio" => "Housing Chapultepec",
                ]);

            DB::table("barrios")
            ->insert(
                [
                "id_barrio" => 101,
                "nombre_barrio" => "IL Punto",
                ]);

            DB::table("barrios")
            ->insert(
                [
                "id_barrio" => 102,
                "nombre_barrio" => "Jade",
                ]);

            DB::table("barrios")
            ->insert(
                [
                "id_barrio" => 103,
                "nombre_barrio" => "Jardinez De Santa Maria",
                ]);

            DB::table("barrios")
            ->insert(
                [
                "id_barrio" => 104,
                "nombre_barrio" => "La Concepción",
                ]);

            DB::table("barrios")
            ->insert(
                [
                "id_barrio" => 105,
                "nombre_barrio" => "La Luna",
                ]);

            DB::table("barrios")
            ->insert(
                [
                "id_barrio" => 106,
                "nombre_barrio" => "La Magdalena",
                ]);

            DB::table("barrios")
            ->insert(
                [
                "id_barrio" => 107,
                "nombre_barrio" => "La Magdalena IV",
                ]);

            DB::table("barrios")
            ->insert(
                [
                "id_barrio" => 108,
                "nombre_barrio" => "Las Azaleas",
                ]);

            DB::table("barrios")
            ->insert(
                [
                "id_barrio" => 109,
                "nombre_barrio" => "Los Perales",
                ]);

            DB::table("barrios")
            ->insert(
                [
                "id_barrio" => 110,
                "nombre_barrio" => "Magnocentro Sección Palmas",
                ]);

            DB::table("barrios")
            ->insert(
                [
                "id_barrio" => 111,
                "nombre_barrio" => "Metepec",
                ]);

            DB::table("barrios")
            ->insert(
                [
                "id_barrio" => 112,
                "nombre_barrio" => "Nu Haus Carranza 834",
                ]);

            DB::table("barrios")
            ->insert(
                [
                "id_barrio" => 113,
                "nombre_barrio" => "Olmos",
                ]);

            DB::table("barrios")
            ->insert(
                [
                "id_barrio" => 114,
                "nombre_barrio" => "Quinta Regina",
                ]);

            DB::table("barrios")
            ->insert(
                [
                "id_barrio" => 115,
                "nombre_barrio" => "Quinta Cristina",
                ]);

            DB::table("barrios")
            ->insert(
                [
                "id_barrio" => 116,
                "nombre_barrio" => "Quinta Mariana",
                ]);

            DB::table("barrios")
            ->insert(
                [
                "id_barrio" => 117,
                "nombre_barrio" => "Real Atenco",
                ]);

            DB::table("barrios")
            ->insert(
                [
                "id_barrio" => 118,
                "nombre_barrio" => "Real Del Sol",
                ]);

            DB::table("barrios")
            ->insert(
                [
                "id_barrio" => 119,
                "nombre_barrio" => "Recinto San Mateo",
                ]);

            DB::table("barrios")
            ->insert(
                [
                "id_barrio" => 120,
                "nombre_barrio" => "Residencial 400UNO",
                ]);

            DB::table("barrios")
            ->insert(
                [
                "id_barrio" => 121,
                "nombre_barrio" => "Residencial Cipreses II",
                ]);

            DB::table("barrios")
            ->insert(
                [
                "id_barrio" => 122,
                "nombre_barrio" => "Residencial Concepto 11 Cero 2",
                ]);

            DB::table("barrios")
            ->insert(
                [
                "id_barrio" => 123,
                "nombre_barrio" => "Residencial Cumbres",
                ]);

            DB::table("barrios")
            ->insert(
                [
                "id_barrio" => 124,
                "nombre_barrio" => "Residencial Lysandra",
                ]);

            DB::table("barrios")
            ->insert(
                [
                "id_barrio" => 125,
                "nombre_barrio" => "Residencial Madero",
                ]);

            DB::table("barrios")
            ->insert(
                [
                "id_barrio" => 126,
                "nombre_barrio" => "Residencial Matamoros 1007",
                ]);

            DB::table("barrios")
            ->insert(
                [
                "id_barrio" => 127,
                "nombre_barrio" => "Residencial Meridian",
                ]);

            DB::table("barrios")
            ->insert(
                [
                "id_barrio" => 128,
                "nombre_barrio" => "Residencial Murano",
                ]);

            DB::table("barrios")
            ->insert(
                [
                "id_barrio" => 129,
                "nombre_barrio" => "Residencial Napoles 1",
                ]);

            DB::table("barrios")
            ->insert(
                [
                "id_barrio" => 130,
                "nombre_barrio" => "Residencial Napoles 2",
                ]);

            DB::table("barrios")
            ->insert(
                [
                "id_barrio" => 131,
                "nombre_barrio" => "Residencial Piñones",
                ]);

            DB::table("barrios")
            ->insert(
                [
                "id_barrio" => 132,
                "nombre_barrio" => "Residencial Velavid",
                ]);

            DB::table("barrios")
            ->insert(
                [
                "id_barrio" => 133,
                "nombre_barrio" => "Quintas Cristiana",
                ]);

            DB::table("barrios")
            ->insert(
                [
                "id_barrio" => 134,
                "nombre_barrio" => "San Buena",
                ]);

            DB::table("barrios")
            ->insert(
                [
                "id_barrio" => 135,
                "nombre_barrio" => "San Carlos",
                ]);

             DB::table("barrios")
            ->insert(
                [
                "id_barrio" => 136,
                "nombre_barrio" => "San Giminiano",
                ]);

             DB::table("barrios")
            ->insert(
                [
                "id_barrio" => 137,
                "nombre_barrio" => "San Miguel",
                ]);

             DB::table("barrios")
            ->insert(
                [
                "id_barrio" => 138,
                "nombre_barrio" => "San Roman 1",
                ]);

             DB::table("barrios")
            ->insert(
                [
                "id_barrio" => 139,
                "nombre_barrio" => "San Sebastian México",
                ]);

             DB::table("barrios")
            ->insert(
                [
                "id_barrio" => 140,
                "nombre_barrio" => "Santa Fe III",
                ]);

             DB::table("barrios")
            ->insert(
                [
                "id_barrio" => 141,
                "nombre_barrio" => "Santa Maria",
                ]);

             DB::table("barrios")
            ->insert(
                [
                "id_barrio" => 142,
                "nombre_barrio" => "Tezontle 1",
                ]);

             DB::table("barrios")
            ->insert(
                [
                "id_barrio" => 143,
                "nombre_barrio" => "Tezontle 2",
                ]);

             DB::table("barrios")
            ->insert(
                [
                "id_barrio" => 144,
                "nombre_barrio" => "Toluca",
                ]);

             DB::table("barrios")
            ->insert(
                [
                "id_barrio" => 145,
                "nombre_barrio" => "Unidad Habitacional Carlos Hank Gon",
                ]);

             DB::table("barrios")
            ->insert(
                [
                "id_barrio" => 146,
                "nombre_barrio" => "Unidad Habitacional Cuauhtemoc",
                ]);

             DB::table("barrios")
            ->insert(
                [
                "id_barrio" => 147,
                "nombre_barrio" => "Venustiano Carranza",
                ]);

            DB::table("barrios")
            ->insert(
                [
                "id_barrio" => 148,
                "nombre_barrio" => "Verona Residencial",
                ]);

            DB::table("barrios")
            ->insert(
                [
                "id_barrio" => 149,
                "nombre_barrio" => "Villas De Atenco",
                ]);

            DB::table("barrios")
            ->insert(
                [
                "id_barrio" => 150,
                "nombre_barrio" => "Villas De Santa Maria",
                ]);

            DB::table("barrios")
            ->insert(
                [
                "id_barrio" => 151,
                "nombre_barrio" => "Villas San Mateo Metepec",
                ]);

            DB::table("barrios")
            ->insert(
                [
                "id_barrio" => 152,
                "nombre_barrio" => "Autorizada",
                ]);

            DB::table("barrios")
            ->insert(
                [
                "id_barrio" => 153,
                "nombre_barrio" => "Don Eloy I",
                ]);

            DB::table("barrios")
            ->insert(
                [
                "id_barrio" => 154,
                "nombre_barrio" => "Don Eloy II",
                ]);

            DB::table("barrios")
            ->insert(
                [
                "id_barrio" => 155,
                "nombre_barrio" => "Don Eloy III",
                ]);

            DB::table("barrios")
            ->insert(
                [
                "id_barrio" => 156,
                "nombre_barrio" => "Santa Fe I",
                ]);

            DB::table("barrios")
            ->insert(
                [
                "id_barrio" => 157,
                "nombre_barrio" => "Santa Fe II",
                ]);
            DB::table("barrios")
            ->insert(
                [
                    "id_barrio" => 158,
                    "nombre_barrio" => "SAN ANGEL I",
                ]
            );
            DB::table("barrios")
            ->insert(
                [
                    "id_barrio" => 159,
                    "nombre_barrio" => "SIN CLASIFICAR",
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
        Schema::dropIfExists('barrios');
    }
}
