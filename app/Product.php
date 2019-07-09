<?php

namespace eestn3;

use Illuminate\Database\Eloquent\Model;


class Product extends Model 

{
   //Especifico a que tabla quiero conectarme por defecto laravel agrega una ese ej. Products
   // public $table ="products";

    Protected $fillable =[
        'name', 'detail', 'image',
        'created_at', 'updated_at',
    ];
    //desactiva los campos de create... updated
    //proctected $timestamps = false;
    

}
