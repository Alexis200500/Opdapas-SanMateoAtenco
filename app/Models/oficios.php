<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class oficios extends Model
{
    use HasFactory;
    protected $table = 'oficios';
    protected $primaryKey = 'id_oficio';
    protected $fillable =['id_oficio',
    'estatus_oficio',
    'estatus_acep_oficio',
    'usuario1_oficio',
    'usuario2_oficio',
    'fecha_entrega_oficio',
    'fecha_limite_oficio',
    'lugar_y_fecha',
    'numero_oficio',
    'asunto',
    'contenido'
    ];
}