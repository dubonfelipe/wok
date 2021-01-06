<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Table extends Model
{
    //
    protected $table = 'wok_table';

    protected $fillable = ['nombre','estado','servicio','restaurante'];
    
    protected $primaryKey = 'id_table';
}
