<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \App\User;
use \App\Gama;

class GamaUserRelation extends Model
{
    //
    protected $fillable = [
        'user_id', 'gama_id', 'auth_flag', 'owner_flag'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function gama()
    {
        return $this->belongsTo(Gama::class, 'gama_id');
    }

    public function is_owner($gama_id, $user_id) {
        
    }
}
