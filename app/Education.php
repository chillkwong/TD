<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    public function pages()
	    {
	        return $this->morphMany('App\Page', 'paginable');
	    }
}
