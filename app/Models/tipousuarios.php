<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tipousuarios extends Model
{
    use HasFactory;

    protected $table = 'tipousuarios';
    protected $id_usuario;
    protected $nombre_usuario;

}
