<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailsBill extends Model
{
    //
    protected $table = 'wok_details_bill';

    protected $fillable = ['descripcion','cantidad','precio_unitario','estado','idmenu','descuento','impuesto_valor_agregado','bill','empleado'];
    
    protected $primaryKey = 'id_details_bill';
}
