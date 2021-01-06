<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    //
    protected $table = 'wok_cliente';

    protected $fillable = ['nombre','nit_cliente','correo','dpi'];
    
    protected $primaryKey = 'id_cliente';
}
