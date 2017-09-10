<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Support\FilterPaginateOrder;

class Customer extends Model
{
   	protected $fillable = [
	'name', 'phone','email'
	];

	protected $filter = [
    	'id', 'email', 'name', 'phone',  'created_at'
    ];

    public function invoices()
    {
    	return $this->hasMany(Invoice::class);
    }

    public static function form()
    {
    	return [
    	'name' => '',
    	'phone' => '',
    	'email' => ''
    	];
    }
}
