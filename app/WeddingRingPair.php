<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WeddingRingPair extends Model
{
    public function weddingRings(){
    	return $this->hasMany(WeddingRing::class);
    }

     public function pages()
    {
        return $this->morphMany('App\Page', 'paginable');
    }
}
