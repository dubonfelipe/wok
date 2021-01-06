<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdministradorHasTypeFranchise extends Model
{
    //
    protected $table = 'wok_administrador_has_type_franchise';

    protected $fillable = ['type_franquicia','administrador'];
    
    //protected $primaryKey = 'id_type_franchise';
}
