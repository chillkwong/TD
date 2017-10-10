<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Support\FilterPaginateOrder;

class Invoice extends Model
{

    use FilterPaginateOrder;

    protected $hidden = array('pivot');

	protected $fillable = [
        'customer_id', 'title', 'notes','date', 'due_date', 'discount',
        'sub_total', 'total', 'deposit','balance','notes', 'count'
    ];

    protected $filter = [
        'id', 'customer_id', 'title', 'notes', 'date', 'due_date', 'discount',
        'sub_total','deposit','balance', 'total', 'created_at',
        'customer.name', 
            'customer.phone'
    ];

	public function customer()
    {
    	return $this->belongsTo(Customer::class);
    }

    public function invDiamonds(){
    	return $this->hasMany(InvDiamond::class);
    }

    public function jewellries(){
        return $this->belongsToMany(Jewellry::class);
    }

    public function invPosts()
    {
        return $this->hasMany(InvPost::class);
    }

    public static function form()
    {
    	return [
    	'customer_id' => 'select',
    	'title' => '',
    	'date' => date('Y-m-d'),
    	'discount' => 0,
    	'sub_total' => 0,
        'deposit' => 0,
        'count' => 1,
        'balance' => 0,
        'notes'=> 'Ring Size:#',
    	'total'=> 0,
    	'inv_diamonds' =>[ InvDiamond::form()],
        'jewellries' => [
            // ['id'=>'',]
            ]
    	];
    }
}

