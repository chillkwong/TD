<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Diamond;
use App\Mail\Appointment;
use File;
use Illuminate\Support\Facades\Input;
use Excel;
use DB;

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

      return response()
        ->json([
          'diamond' =>$diamond,
          ]);
    }


    public function store(Request $request){

      // dd($request->csv);

        $path = $this->getFileName($request->csv[0]);
        $request->csv[0]->move(base_path('public/files'), $path);

        $results = Excel::load('public/files/'.$path, function($reader){
                                                $reader->all();
                                                })->get();

        // dd($results);
        unlink(base_path('public/files/').$path);
        $this->importToDatabase($results);

        return  response()
                  ->json([
                    'saved' => 'Insert Record successfully.'
                  ]);

    }

    public function importToDatabase($data)
    {
        $usRate = 7.81;
        $supplierFactor = 1.15;

        $lookup = [
        'stock' => 'stock',
        'Stock' => 'stock',
        'weight' => 'weight',
        'carat' => 'weight',

         ];

        // dd($data);
         $diamonds = [];
        if(!empty($data) && $data->count()){

                foreach ($data as $key => $value) {
                  
                  $d = new Diamond;

                  $d->stock = $value->stock; 
                  $d->price = $this->markPrice($value->price);
                  $d->certificate = $value->certificate;
                  $d->shape = $value->shape;
                  $d->weight = $value->weight; 
                  $d->color = $value->color;
                  $d->clarity = $value->clarity; 
                  $d->cut = $value->cut;
                  $d->polish = $value->polish; 
                  $d->symmetry = $value->symmetry;
                  $d->fluorescence = $value->fluorescence; 
                  $d->lab = $value->lab;
                  $d->location = $value->location; 
                  $d->imageLink = $value->imagelink;

                  $diamonds[]= $d;

                  $d->save();

                }
                
                
             
             
             
            }
                return  ;
        }

        protected function getFileName($file)
    {
        return str_random(). '.' .$file->extension();
    }

    protected function markPrice($price)
    {
      $usRate = 7.8;
      $priceRange = ['7000' => '1.15',
                  '10000' => '1.13', 
                  '15000' => '1.1', 
                  '20000' => '1.08', 
                  '30000' => '1.07', 
                  '10000000' => '1.06'
                ];

      foreach ($priceRange as $range => $priceFactor) {
          if ($price <= $range) {
            $price *= $priceFactor * $usRate;
            return round($price,-2);
          }
      }
      
        
    }
}
