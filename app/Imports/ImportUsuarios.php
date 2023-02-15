<?php

namespace App\Imports;

use App\Models\usuarios;
use Maatwebsite\Excel\Concerns\ToModel;

class ImportUsuarios implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new usuarios([
            'nombre' => $row[0],
            'fecha_n' => $row[1],
            'edad' => $row[2],
            'sexo' => $row[3],
            
            'image' => 'sin_foto.jpg',
            'ine' => 'sin_foto.jpg',
            'curp' => '',
            'rfc' => '',
            'comdom' => '',
            'facebook' => '',
            'google' => '',
            
            'email' => $row[4],
            'num_casa' => $row[5],
            'celular' => $row[6],
            'calle' => $row[7],
            
            'calle2' => $row[8],
            'latitud' => $row[9],
            'longitud' => $row[10],
            
            'id_barrio' => $row[11],
            'num_dom' => $row[12],
            'num_inmueble' => $row[13],
            'status' => $row[14],
            'estado_civil' => $row[15],
            'tipo_inm' => $row[16],
            'observacion' => $row[17]
        ]);
    }
}
