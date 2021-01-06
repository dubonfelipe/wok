<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Franchise extends Model
{
    //
    protected $table = 'wok_franchise';

    protected $fillable = ['direccion_franquicia','telefono','email','type_franquicia','owner','persona_contable','type_price'];
    
    protected $primaryKey = 'id_franchise';
}
