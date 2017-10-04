<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
	protected $fillable = [
    	'locale','content'
    ];

    public function invPosts(){
    	return $this->belongsToMany(InvPost::class);
    }

    public static function form(){
    	return [
    		'locale' => [''],
            'content' => ['']
    	];
    }
}
