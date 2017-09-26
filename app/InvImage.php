<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InvImage extends Model
{
    protected $fillable = [
    	'image'
    ];
    public function invpost(){
    	return $this->belongsTo(InvPost::class);
    }

    public static function form()
    {
    	return [
    		'image' => ''
    	];
    }
}
