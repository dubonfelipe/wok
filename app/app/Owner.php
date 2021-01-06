<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    //
    protected $table = 'wok_owner';

    protected $fillable = ['primer_nombre','segundo_nombre','otros_nombres','primer_apellido','segundo_apellido','apallido_casada','documento_identificacion','email','telefono','telefono2'];
    
    protected $primaryKey = 'id_owner';
}
