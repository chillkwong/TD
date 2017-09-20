<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jewellry extends Model
{
    protected $hidden = array('pivot');
    
	protected $fillable =[
	'stock' ,'name' , 'description','unit_price',
	];
	
    public function invoices(){
    	return $this->belongsToMany(Invoice::class);
    }

    public static function form()
    	{
    		return [
    		'id' => '' , 
    		'name' => '' , 
    		'description' => '' , 
    		'unit_price' => ''     
    		];
    	}
}
