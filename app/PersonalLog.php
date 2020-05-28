<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PersonalLog extends Model
{
    //
    protected $fillable = [
        'user_id', 'amount', 'inc_dec_flag', 'source'
    ];
}
