<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FelType extends Model
{
    //
    protected $table = 'wok_fel_type';

    protected $fillable = ['descripcion'];
    
    protected $primaryKey = 'id_fel';
}
