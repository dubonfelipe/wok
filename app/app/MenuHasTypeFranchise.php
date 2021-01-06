<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuHasTypeFranchise extends Model
{
    //
    protected $table = 'wok_menu_has_type_franchise';

    protected $fillable = ['type_franquicia','menu'];
    
    //protected $primaryKey = 'id_type_franchise';
}
