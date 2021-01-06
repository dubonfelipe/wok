<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdminEmployee extends Model
{
    //
    protected $table = 'wok_admin_employee';

    protected $fillable = ['numero_cuenta','monetaria_ahorro','monto','banco','empleado'];
    
    protected $primaryKey = 'id_employee';
}
