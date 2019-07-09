<?php

namespace eestn3;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{

    public $table ="products";

    Protected $fillable =[
        'name', 'detail', 'image',
    ];

    

}
