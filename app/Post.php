<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        
    ];

    public function photos(){
    	return $this->hasMany(PostPhoto::class);
    }

    public function contents(){
    	return $this->hasMany(PostContent::class);
    }

    public static function form(){
    	return [
    		'video' => [''],
            'images' => [''],
            'contents' => [PostContent::form()]
    	];
    }
}
