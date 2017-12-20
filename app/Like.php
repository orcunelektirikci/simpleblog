<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    //
    protected $fillable = ['likeable_id','likeable_type'];

    public function comment(){
        return $this->morphTo('App\Comment','likeable');
    }

    public function post(){
        return $this->morphTo('App\Post','likeable');
    }


}
