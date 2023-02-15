<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class responsables extends Model
{
    use HasFactory;
    protected $table = 'responsables';
    protected $id_responsable;
    protected $nombre_responsable;
}
