<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tareas extends Model
{
    use HasFactory;
    protected $table = 'tareas';
    protected $primaryKey = 'id_tareas';
    protected $id_tareas;
    protected $personal_tarea;
    protected $nombre_tarea;
    protected $descripcion_tarea;
    protected $fecha_tarea;
    protected $hora_tarea;
    
}
