<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GamaUserRelation extends Model
{
    //
    protected $fillable = [
        'user_id', 'gama_id', 'auth_flag', 'owner_flag'
    ];
}
