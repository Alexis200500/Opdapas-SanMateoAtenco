<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class peticiones extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'peticiones';
    protected $primaryKey = 'id_peticion';
    protected $nombre_completo_peticion;
    protected $telefono_peticion;
    protected $id_barrio;
    protected $calle_peticion;
    protected $numero_domicilio_peticion;
    protected $numero_inmueble_peticion;
    protected $fecha_peticion;
    protected $id;
    protected $descripcion_detalle_peticion;
    protected $id_responsable;
    protected $id_area;
    protected $fecha_detalle_peticion;
    protected $prioridad_peticion;
    protected $status_peticion;
    protected $status_info_peticion;
    protected $desarrollo_info_peticion;
    protected $reporte_info_peticion;
    protected $validacion_info_peticion;
    protected $avance_peticion;
    protected $respuesta_peticion;
    protected $ovservacion_peticion;
    protected $respuest_peticion;
}
