<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    //
    protected $table = 'wok_bill';

    protected $fillable = ['estado_impreso','numero_autorizacion','serie_documento','numero_documento','numero_acceso','fecha_hora_facturacion','fecha_hora_certificacion','tipo_moneda','tipo_pago','fel','pedido','empleado'];
    
    protected $primaryKey = 'id_bill';
}
