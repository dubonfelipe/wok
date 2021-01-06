<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    //
    protected $table = 'wok_menu';

    protected $fillable = ['descripcion','resumen','img','type_foods'];
    
    protected $primaryKey = 'id_menu';
}
