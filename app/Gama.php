<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gama extends Model
{
    //
    protected $fillable = [
        'gama_name', 'sum', 'icon_path', 'active_flag'
    ];
}
