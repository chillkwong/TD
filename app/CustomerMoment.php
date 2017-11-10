<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CustomerMoment extends Model
{
    public function image()
	    {
	        return $this->morphMany('App\Page', 'imageable');
	    }
}
