<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    //Indicamos que tabla va a modificar este modelo
    protected $table = 'likes';


    //Relacion de muchos a uno
    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    //Relacion de muchos a uno
    public function image()
    {
        return $this->belongsTo('App\Image', 'image_id');
    }
}
