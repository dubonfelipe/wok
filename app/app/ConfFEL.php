<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ConfFEL extends Model
{
    //
    protected $table = 'wok_conf_fel';

    protected $fillable = ['llave_electronica','usuario_cert','token_autorizacion','nombre_contribuyente','nit','owner','certificador'];
    
    protected $primaryKey = 'id_conf_fel';
}
