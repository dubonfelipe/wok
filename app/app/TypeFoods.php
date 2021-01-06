<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeFoods extends Model
{
    //
    protected $table = 'wok_type_foods';

    protected $fillable = ['descripcion'];
    
    protected $primaryKey = 'id_type_foods';
}
