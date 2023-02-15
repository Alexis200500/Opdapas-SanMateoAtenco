<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class solicituds_materials extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_material';
    protected $fillable =['id_material',
    'nombre_completo_material',
    'telefono_material',
    'nombre_domicilio_material',
    'id_barrio',
    'numero_inmueble',
    'calle_material',
    'numero_domicilio_material',
    'id'];
  
}
