<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    use HasFactory;
    protected $table = 'proyectos';

    protected $fillable = [
        'nombre_proyecto', 'fuente_fondos', 'monto_planificado','monto_patrocinado','monto_fondos_propios'
    ];
}
