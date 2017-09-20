<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Support\FilterPaginateOrder;

class Item extends Model
{
    use FilterPaginateOrder;

    protected $fillable = [
    'qty', 'unit_price', 'name', 'description','supplier_id','invoice_id' 
    ];

    protected $filter = [
    'id', 'qty', 'unit_price', 'name', 'description','supplier_id','invoice_id',
    'invoice.id'
    ];

    public function invoice(){
    	return $this->belongsTo(Invoice::class);
    }

    public function supplier(){
    	return $this->belongsTo(Supplier::class);
    }

      public function post()
    {
    	return $this->belongsTo(Post::class);
    }

    public function diamond()
    {
        return $this->hasOne(Diamond::class);
    }

    public function jewellry()
    {
        return $this->belongsTo(Jewellry::class);
    }

    public function photos(){
    	return $this->belongsToMany(Photo::class);
    }
    
    public static function form()
    {
    	return [
    	'qty' => 0,
    	'unit_price' => 0,
    	'name' => '',
    	'description' => ''
    	];
    }
}
