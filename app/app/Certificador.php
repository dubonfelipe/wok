<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Certificador extends Model
{
    //
    protected $table = 'wok_certificador';

    protected $fillable = ['descripcion','nombre','nit'];
    
    protected $primaryKey = 'id_certificador';
}
