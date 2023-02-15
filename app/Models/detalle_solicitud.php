<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detalle_solicitud extends Model
{
    use HasFactory;
        protected $table = 'detalle_solicituds';
        protected $id_detalle;
        protected $status_detalle;
        protected $fecha_detalle;
        protected $descripcion_detalle;
        protected $litros_detalle;
        protected $id_tipo_solicitud;
        protected $id_solicitud;}
