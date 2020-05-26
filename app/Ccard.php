<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ccard extends Model
{
    //
    protected $fillable = [
        'number', 'limit_month_str', 'limit_year_str',
    ];
}
