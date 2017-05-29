<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{

	public $timestamps = false;
	
    public function tags(){
    	return $this->belongsToMany('App\Tag');
    }

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
}
