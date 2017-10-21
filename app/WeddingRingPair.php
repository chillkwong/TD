<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WeddingRingPair extends Model
{
    public function weddingRings(){
    	return $this->hasMany(WeddingRing::class);
    }
}
