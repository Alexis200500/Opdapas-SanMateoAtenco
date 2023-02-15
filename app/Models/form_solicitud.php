<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class form_solicitud extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'form_solicitud';
    protected $id;
    protected $nombre_solicitud;

    protected $fecha_solicitud;
    protected $fecha_limite;

    protected $id_responsable;
    protected $calle_solicitud;
    protected $no_solicitud;
    protected $id_barrio;
    protected $cp_solicitud;
    protected $telefono_solicitud;
    protected $caracater_solicitud;
    protected $calle_in_solicitud;
    protected $no_in_solicitud;
    // protected $barrrio_in_solicitud;
    protected $cp_in_solicitud;
    protected $clave_solicitud;
    protected $id_barrio2;
    protected $superficie_pred_solicitud;
    protected $superficie_const_solicitud;
    protected $servicoal;
    protected $motivo_solicitud;
    protected $no_tomas;
    protected $diametro_toma;
    protected $no_bene_toma;
    protected $no_descarga;
    protected $diametro_descarga;
    protected $no_ben_descarga;
    protected $servicio;
    protected $activo;


}
