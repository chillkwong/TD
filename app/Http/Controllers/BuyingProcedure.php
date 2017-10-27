<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BuyingProcedure extends Controller
{


	public function index ($locale) {
		App()->setLocale($locale);
	    return view('buyingProcedure.index');
	}

    public function appointment(){

    	
    	$trans = trans('buyingProcedure');

    	return response()
    			->json([
    			'trans' => $trans
    			]);
    }		
}
