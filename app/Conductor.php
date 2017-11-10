<?php

namespace Prueba;

use Illuminate\Database\Eloquent\Model;

class Conductor extends Model
{
    protected $fillable = [
        'nombres', 'apellidos', 'tipodedocumento', 'documento', 'fechadenacimiento', 'genero',
    ];
}
