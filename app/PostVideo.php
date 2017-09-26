<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostVideo extends Model
{
    protected $fillable = [
    	'video'
    ];
    public function post(){
    	return $this->belongsTo(Post::class);
    }

    public static function form()
    {
    	return [
    		'video' => ''
    	];
    }
}
