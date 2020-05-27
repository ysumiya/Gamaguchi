<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \App\GamaUserRelation;

class Gama extends Model
{
    //
    protected $fillable = [
        'gama_name', 'sum', 'icon_path', 'active_flag'
    ];

    public function gamauserrelations()
    {
        return $this->hasMany('App\GamaUserRelation');
    }

    public function get_gama_by_gama_id($gama_id) {
        $gama = Gama::find($gama_id);
    }
}
