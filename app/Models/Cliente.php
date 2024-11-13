<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'clientes';
    protected $primaryKey = 'id_cliente';
    protected $fillable = [
        'nombres_cliente',
        'apellidos_cliente',
        'edad_cliente',
        'direccion_cliente',
        'pais_cliente',
        'ciudad_cliente',
        'distrito_cliente',
        'email_cliente',
        'numero_cliente',
        'estado_cliente',
    ];
}
