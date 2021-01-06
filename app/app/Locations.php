<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Locations extends Model
{
    //
    protected $table = 'wok_locations';

    protected $fillable = ['direccion','cliente'];
    
    protected $primaryKey = 'id_locations';
}
