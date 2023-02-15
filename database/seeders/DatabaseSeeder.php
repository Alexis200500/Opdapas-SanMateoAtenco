<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $gender = $faker->randomElement(['male','female']);
        foreach (range(1,9999) as $index){
            DB::table('usuarios')->insert([
                'nombre'=>  $faker->firstName($gender = 'male'|'female'),
                'fecha_n'=> $faker->date($format = 'Y-m-d', $max = 'now'),
                'edad'=> $faker->numberBetween($min = 1, $max = 70),
                'sexo'=> $faker->randomElement($array = array('Femenino', 'Masculino')),
                'image'=> 'sin_foto.jpg',
                'ine'=> 'sin_foto.jpg',
                'curp'=> 'sin_foto.jpg',
                'rfc'=>'sin_foto.jpg',
                'comdom'=> 'sin_foto.jpg',
                'facebook'=> 'sin_foto.jpg',
                'google'=> 'sin_foto.jpg',
                'email'=> $faker->email,
                'num_casa'=> 'calle',
                'celular'=> 'calle',
                'calle'=> 'calle',
                'id_barrio'=> $faker->numberBetween($min = 1, $max = 159),
                'num_dom'=>  $faker->numberBetween($min = 1, $max = 50),
                'num_inmueble'=>  $faker->numberBetween($min = 1, $max = 1000),
                'status'=> $faker->randomElement($array = array('Activo', 'Inactivo')),
                'estado_civil'=> $faker->randomElement($array = array('Casado', 'Divorciado','Soltero','Viudo')),
                'tipo_inm'=> $faker->randomElement($array = array('Casa', 'Negocio','Empresa')),
                'observacion'=> 'sin observacion',

                'latitud'=> '0',
                'longitud'=> '0',
                'calle2'=> 'Sincalle',
        
                'created_at'=> $faker->dateTime($max='now', $timezone=null),
                'updated_at'=> $faker->dateTime($max='now', $timezone=null),
            ]);
        }
    }
}
