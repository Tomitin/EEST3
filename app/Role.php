<?php

namespace eestn3;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public function users(){
        return $this->belongsToMany('eestn3\User');
    }

}