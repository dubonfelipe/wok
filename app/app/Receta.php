<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Receta extends Model
{
    //
    protected $table = 'wok_receta';

    protected $fillable = ['descripcion_proceso','tiempo_preparacion','menu'];
    
    protected $primaryKey = 'id_receta';
}
