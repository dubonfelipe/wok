<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payments extends Model
{
    //
    protected $table = 'wok_payments';

    protected $fillable = ['descripcion','monto','constante','restaurante','proveedores'];
    
    protected $primaryKey = 'id_payments';
}
