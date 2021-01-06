<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    //
    protected $table = 'wok_stock';

    protected $fillable = ['cantidad','in_out_stocks','caducidad_dias','estado','producto'];
    
    protected $primaryKey = 'id_stock';
}
