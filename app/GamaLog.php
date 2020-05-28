<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GamaLog extends Model
{
    //
    protected $fillable = [
        'user_id', 'gama_id', 'amount', 'inc_dec_flag', 'source'
    ];
}
