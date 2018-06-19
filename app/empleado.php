<?php

namespace ProyectoLaravel;

use Illuminate\Database\Eloquent\Model;

class empleado extends Model
{

    public  $timestamps=false;
    protected $table='empleados';
    protected $fillable=[ 'nombres', 
    'apellidos',
    'telefono',
    'correo'
    ];
}
