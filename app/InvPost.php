<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InvPost extends Model
{
    protected $fillable = [
        'invoice_id','video','cover','image1','image2'
    ];
   
    public function invoice(){
        return $this->belongsTo(Invoice::class);
    }
    
    public function images(){
        return $this->hasMany(InvImage::class);
    }

    public function contents(){
        return $this->hasMany(InvContent::class);
    }

    public function tags(){
        return $this->belongsToMany(Tag::class);
    }
    public static function form()
    {
        return [
            'invoice_id'=>'',
            'video' => '',
            'contents' => [[ 'locale' => 'en',
                            'content' => ''],
                            [ 'locale' => 'hk',
                            'content' => ''],
                            [ 'locale' => 'cn',
                            'content' => ''],
                        ],
            'cover' => '',
            'image1' => '',
            'image2' => '',
        ];
    }
}
