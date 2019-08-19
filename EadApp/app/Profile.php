<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table = "profile";
    protected $guarded = [

    ];

    public function user()
    {
        return $this->belongsTo('App\User', 'id_user', 'id');
    }

}
