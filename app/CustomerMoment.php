<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CustomerMoment extends Model
{
    public function images()
	    {
	        return $this->morphMany('App\Image', 'imageable');
	    }
}
