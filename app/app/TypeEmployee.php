<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeEmployee extends Model
{
    //
    protected $table = 'wok_type_employee';

    protected $fillable = ['descripcion'];
    
    protected $primaryKey = 'id_type_employee';
}
