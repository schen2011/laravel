<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserKey extends Model
{
    protected $guarded = [];
    public function userkey()
    {
        return $this->hasMany('App\UserKey');
    }
}
