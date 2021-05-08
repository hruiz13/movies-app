<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movies extends Model
{
    use HasFactory;

    public function users(){
        return $this->belongsToMany(User::class);
    }

     //relacion muchos a muchos
     public function users(){
        return $this->belongsToMany('App\Models\User'); //2nd param, the table(user_movie), 3rd and 4th param are the names, 
    }
}
