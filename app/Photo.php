<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    public function items(){
    	return $this->belongsToMany(Item::class);
    }
    
}
