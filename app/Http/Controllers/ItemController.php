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
    	$items = Item::filterPaginateOrder();

    	return response()
    		->json([
    			'model' => $items
    			]);
    }

    public function show($id)
    {
    	$items  = Item::with('invoice','jewellry','diamond')->findOrFail($id);

    	return response()
    		->json([
    			'model' =>$items,
    			]);
    }

    public function create()
    {
        return response()
            ->json([
                'form' =>Item::form(),
                'option' => [
                    'jewellries' => Jewellry::orderBy('name')->get(),
                    'diamonds' => Diamond::orderBy('weight')->get()

                ]
                ]);
    }
}
