<?php

//Author: Wilmar Delgado
//Date: Nov 06 2018
//Email: wilmardp50@gmail.com

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public $primaryKey = 'user_id';

    public $table = 'user_profiles';
}
