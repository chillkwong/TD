<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InvContent extends Model
{
    protected $fillable = [
    	'locale','content'
    ];


    public function invpost(){
    	return $this->belongsTo(InvPost::class);
    }
    
    public static function form()
    {
        return [
           
        ];
    }
}
