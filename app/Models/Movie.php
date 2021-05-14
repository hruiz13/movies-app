<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    //relacion muchos a muchos
    public function users()
    {
        return $this->belongsToMany('App\Models\User'); //2nd param, the table(user_movie), 3rd and 4th param are the names, 
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
