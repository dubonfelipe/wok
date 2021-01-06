<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    //
    protected $table = 'wok_producto';

    protected $fillable = ['nombre_producto','descripcion','stock_minimo','medidas','estado','restaurante'];
    
    protected $primaryKey = 'id_producto';
}
