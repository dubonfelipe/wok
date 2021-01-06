<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PersonContable extends Model
{
    //
    protected $table = 'wok_person_contable';

    protected $fillable = ['primer_nombre','segundo_nombre','otros_nombres','primer_apellido','segundo_apellido','apallido_casada','documento_identificacion','email','telefono','telefono2','owner'];
    
    protected $primaryKey = 'id_per_con';
}
