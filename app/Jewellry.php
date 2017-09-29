<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Support\FilterPaginateOrder;

class Jewellry extends Model
{

    use FilterPaginateOrder;

    protected $hidden = array('pivot');
    
	protected $fillable =[
	'id','stock' ,'name' , 'description','mounting','sideStone','cover','image1','video','unit_price',
	];

    protected $filter = [
    'id','stock' ,'name' , 'description','mounting','sideStone','cover','image1','video','unit_price',
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
            'mounting'=> '',
            'sideStone' => false,
            'cover' =>'',
            'image1'=> '',
            // 'image2'=> '',
            'video'=> ''

                		];
    	}
}
