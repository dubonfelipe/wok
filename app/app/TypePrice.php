<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypePrice extends Model
{
    //
    protected $table = 'wok_type_price';

    protected $fillable = ['descripcion'];
    
    protected $primaryKey = 'id_type_price';
}
