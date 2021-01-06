<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Frases extends Model
{
    //
    protected $table = 'wok_frases';

    protected $fillable = ['descripcion','fel'];
    
    protected $primaryKey = 'id_frases';
}
