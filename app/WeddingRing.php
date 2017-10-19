<?php

namespace App;

use App\Support\WeddingRingFilter;
use Illuminate\Database\Eloquent\Model;

class WeddingRing extends Model
{
    use WeddingRingFilter;

	    protected $hidden = array('pivot');
	    
		protected $fillable =[
		'id','stock' ,'name' , 'description','metal','style','cover','image1','video','unit_price',
		];

	    protected $filter = [
	    'id','stock' ,'name' , 'description','metal','style','cover','image1','video','unit_price',
	    ];
		
	    public function invoices(){
	    	return $this->belongsToMany(Invoice::class);
	    }

	    public static function form()
	    	{
	    		return [
	    		'name' => '' , 
	    		'description' => '' , 
	    		'unit_price' => '',
	            'metal'=> '',
	            'style' => '',
	            'cover' =>'',
	            'image1'=> '',
	            // 'image2'=> '',
	            'video'=> ''

	                		];
	    	}
}
