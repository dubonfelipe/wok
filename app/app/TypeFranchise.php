<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeFranchise extends Model
{
    //
    protected $table = 'wok_type_franchise';

    protected $fillable = ['descripcion_franquicia'];
    
    protected $primaryKey = 'id_type_franchise';
}
