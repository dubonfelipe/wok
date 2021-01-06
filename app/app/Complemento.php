<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Complemento extends Model
{
    //
    protected $table = 'wok_complemento';

    protected $fillable = ['descripcion','bill'];
    
    protected $primaryKey = 'id_complemento';
}
