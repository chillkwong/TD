<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Invoice;
use App\Item;
use App\Diamond;
use App\Jewellry;

class ItemController extends Controller
{
    public function index()
    {
    	$items = Item::orderBy('created_at', 'desc')->get();

    	return response()
    		->json([
    			'items' => $items
    			]);
    }

    public function create()
    {
    	return response()
    		->json([
    			'form' =>Invoice::form(),
    			'option' => [
    				'customers' => Customer::orderBy('name')->get()
    			]
    			]);
    }
}
