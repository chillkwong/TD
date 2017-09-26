<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostContent extends Model
{
    protected $fillable = [
    	'post_id','locale','content'
    ];

    public function post(){
    	return $this->belongsTo(Post::class);
    }

    public static function form()
    {
    	return [
    		'locale' => '',
    		'content' => ''
    	];
    }
}
