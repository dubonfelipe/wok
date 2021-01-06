<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    //
    protected $table = 'wok_restaurant';

    protected $fillable = ['franquicia'];
    
    protected $primaryKey = 'id_restaurant';
}
