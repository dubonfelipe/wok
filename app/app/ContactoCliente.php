<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactoCliente extends Model
{
    //
    protected $table = 'wok_contacto';

    protected $fillable = ['telefono','cliente'];
    
    protected $primaryKey = 'id_contacto';
}
