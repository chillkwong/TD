<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jewellry extends Model
{

	protected $fillable =[
	'stock' ,'title' , 'description'
	];
	
    public function items(){
    	return $this->belongsToMnay(Item::class);
    }
}
