<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detalle_solicituds_material extends Model
{
    use HasFactory;
    protected $table = 'detalle_solicituds_materials';
    protected $primaryKey = 'id_detalle_material';
    protected $fillable =['id_detalle_material',
    'status_detalle',
    'fecha_detalle',
    'descripcion_detalle',
    'cantidad_material',
    'id_tipo_material',
    'id_material'];
}
