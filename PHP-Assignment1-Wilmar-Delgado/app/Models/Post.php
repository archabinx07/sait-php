<?php

//Author: Wilmar Delgado
//Date: Nov 06 2018
//Email: wilmardp50@gmail.com

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function user() 
    {
        return $this->belongsTo('App\User');
    }

    public function likes() 
    {
        return $this->belongsToMany('App\User');
    }

}
