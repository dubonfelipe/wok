<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    //
    protected $table = 'wok_price';

    protected $fillable = ['monto','type_price','menu'];
    
    protected $primaryKey = 'id_price';
}
