<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Support\EngagementRingFilter;

class EngagementRing extends Model
{
	use EngagementRingFilter;

	    protected $hidden = array('pivot');
	    
		protected $fillable =[
		'id','stock' ,'name' , 'description','mounting','style','cover','image1','video','unit_price',
		];

	    protected $filter = [
	    'id','stock' ,'name' , 'description','mounting','style','cover','image1','video','unit_price',
	    ];
		
					
		public function pages()
	    {
	        return $this->morphMany('App\Page', 'paginable');
	    }
    
	    public function invoices(){
	    	return $this->belongsToMany(Invoice::class);
	    }

	    public static function form()
	    	{
	    		return [
	    		'name' => '' , 
	    		'description' => '' , 
	    		'unit_price' => '',
	            'mounting'=> '',
	            'style' => '',
	            'cover' =>'',
	            'image1'=> '',
	            // 'image2'=> '',
	            'video'=> ''

	                		];
	    	}
}
