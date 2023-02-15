<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class usuarios extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'id',
        'nombre',
        'fecha_n',
        'edad',
        'sexo',
        'image',
        'ine',
        'curp',
        'rfc',
        'comdom',
        'facebook',
        'google',
        'email',
        'num_casa',
        'celular',
        'calle',
        'id_barrio',
        'num_dom',
        'num_inmueble',
        'status',
        'estado_civil',
        'tipo_inm',
        'observacion',
        'id_peticion',
        
        'latitud',
        'longitud',
        'calle2'

    ];
}
