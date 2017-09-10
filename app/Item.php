<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{

	protected $fillable = [
	'qty', 'unit_price', 'name', 'description', 
	];

    public function invoices(){
    	return $this->belongsToMany(Invoice::class);
    }

    public function supplier(){
    	return $this->belongsTo(Supplier::class);
    }

      public function post()
    {
    	return $this->belongsTo(Post::class);
    }

    public function diamonds()
    {
        return $this->hasMany(Diamond::class);
    }

    public function jewellery()
    {
        return $this->belongsToMany(Jewellery::class);
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
