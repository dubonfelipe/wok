<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banco extends Model
{
    //
    protected $table = 'wok_banco';

    protected $fillable = ['nombre'];
    
    protected $primaryKey = 'id_banco';
}
