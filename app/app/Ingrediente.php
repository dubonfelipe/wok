<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingrediente extends Model
{
    //
    protected $table = 'wok_ingrediente';

    protected $fillable = ['nombre_ingrediente','cantidad','medida','receta'];
    
    protected $primaryKey = 'id_ingrediente';
}
