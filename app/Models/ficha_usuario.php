<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ficha_usuario extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
    'id_ficha',
    'nombre_completo_ficha',
    'fecha_ficha',
    'edad_ficha',
    'sexo_ficha',
    'email_ficha',
    'num_casa_ficha',
    'celular_ficha',
    'calle_ficha',
    'id_barrio',
    'numero_domicilio_ficha',
    'numero_inmueble_ficha',
    'id',
    'status_ficha',
    'ine_ficha',
    'curp_ficha',
    'comprobante_ficha',
    'maps_ficha'
 ];
}
