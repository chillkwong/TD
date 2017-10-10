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

      return response()
        ->json([
          'diamond' =>$diamond,
          ]);
    }

    public function appointment(Request $request)
    {
      // $this->validate($request,[
      //   'name' => 'required',
      //   'phone' => 'required'
      // ]);

      $appointment = $request->all();
      // dd($appointment);
      \Mail::to('pete@tingdiamond.com')->send(new Appointment($appointment));

      return response()
        ->json(
          ['saved' => true,
        'message' => trans('frontEnd.appointmentSuccess')
        ]
        );

    }
}
