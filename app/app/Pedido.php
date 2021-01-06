<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    //
    protected $table = 'wok_pedido';

    protected $fillable = ['estado','cliente','table','restaurante','dirrecion_pedido'];
    
    protected $primaryKey = 'id_pedido';
}
