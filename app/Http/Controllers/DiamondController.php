<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Diamond;

class DiamondController extends Controller
{
  
  public function index(){

  	$model = Diamond::SearchPaginateAndOrder();
        // $model = Diamond::all();
      $locale = app()->getLocale();
    	$columns = Diamond::$columns;
    	return response()
    		->json([
    		'model' => $model,
    		'columns' => $columns,
    		]);
  }
}
