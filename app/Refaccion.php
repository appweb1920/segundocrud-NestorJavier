<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Refaccion extends Model
{
    protected $fillable = [
        'nombre', 'descripcion', 'num_piezas', 'costo_pieza',
    ];
}
