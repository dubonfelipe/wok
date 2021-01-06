<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    //
    protected $table = 'wok_employee';

    protected $fillable = ['primer_nombre','segundo_nombre','otros_nombres','primer_apellido','segundo_apellido','apallido_casada','documento_identificacion','email','nit','telefono','telefono2','restaurante','tipo_empleado'];
    
    protected $primaryKey = 'id_employee';
}
