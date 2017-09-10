<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Support\FilterPaginateOrder;

class Invoice extends Model
{

    use FilterPaginateOrder;

	protected $fillable = [
	'customer_id', 'title', 'date','due_date', 'discount', 'sub_total', 'deposti','balance', 'total', 'created_at',
    'customer.id', 'customer.email', 'customer.name', 
            'customer.phone',  'customer.created_at'
	];

	public function customer()
    {
    	return $this->belongsTo(Customer::class);
    }

    public function items(){
    	return $this->belongsToMany(Item::class);
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public static function form()
    {
    	return [
    	'customer_id' => 'select',
    	'title' => 'Invoice For',
    	'date' => date('Y-m-d'),
    	'discount' => null,
    	'sub_total' => 0,
    	'deposit' => 0,
    	'balance' => 0,
    	'total'=> 0,
    	'items' => [Item::form()]
    	];
    }
}

