<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Diamond;
use App\Mail\Appointment;
use File;

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

  public function show($id)
    {
      $diamond  = Diamond::findOrFail($id);
      $filename = base_path('public/fron_end/contact/Winnie_Kwong.vcf');

      return response()
        ->json([
          'diamond' =>$diamond,
          'contact' =>File::get($filename)
          ]);
    }

    public function appointment()
    {
      // $diamond = $request;
      \Mail::to('pete@tingdiamond.com')->send(new Appointment);

      return response()
        ->json(
          ['sent' => true]
        );

    }
}
