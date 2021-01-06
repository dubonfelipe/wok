<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CorteCaja extends Model
{
    protected $table = 'wok_corte_caja';

    protected $fillable = ['ef_caja','cierre_ef','cierre_tj','fecha_cierre','usr','restaurante'];
    
    protected $primaryKey = 'id_corte';
}
