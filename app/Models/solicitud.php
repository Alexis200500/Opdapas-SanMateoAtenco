<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class solicitud extends Model
{
    use HasFactory;
    protected $table = 'solicituds';
    protected $primaryKey = 'id_solicitud';
    protected $id_solicitud;
    protected $nombre_completo_solicitud;
    protected $telefono_solicitud;
    protected $nombre_domicilio_solicitud;
    protected $nombre_barrio;
    protected $calle_solicitud;
    protected $numero_inmueble;
    protected $numero_domicilio_solicitud;
    protected $id_barrio;
    protected $id;
}
