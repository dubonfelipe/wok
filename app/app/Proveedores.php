<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proveedores extends Model
{
    //
    protected $table = 'wok_proveedores';

    protected $fillable = ['nombre','nit_proveedor','descripcion','restaurante'];
    
    protected $primaryKey = 'id_proveedores';
}
