<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Distrito extends Model
{
    protected $table = 'distritos';
    protected $primaryKey = 'id_distrito';
    protected $fillable = [
        'nombre_distrito',
    ];
}
