<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class barrio extends Model
{
    use HasFactory;
    protected $table = 'barrios';
    protected $id_barrio;
    protected $nombre_barrio;
}
