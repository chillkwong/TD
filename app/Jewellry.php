<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Support\FilterPaginateOrder;

class Jewellry extends Model
{

    use FilterPaginateOrder;

    protected $hidden = array('pivot');
    
	protected $fillable =[
	'id','stock' ,'name' , 'description','unit_price',
	];

    protected $filter = [
    'id','stock' ,'name' , 'description','unit_price',
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
