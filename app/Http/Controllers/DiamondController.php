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
  
  
  public function bladeIndex($locale)
    {
      App()->setLocale($locale);


      return view('diamond.index', compact(''));
 
    }


    public function bladeShow($locale, $id)
    {
      App()->setLocale($locale);
      
      $diamond  = Diamond::findOrFail($id);
      return view('diamond.show', compact('diamond'));
 
    }

  public function index(){

  	$model = Diamond::SearchPaginateAndOrder();
        // $model = Diamond::all();
   
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



       // $fileNames = ['RU-DiamondData.csv'];
       //          $connIPs = ['54.254.191.140'];
       //          $ftp_user_names = ['ru_user1'];
       //          $ftp_user_passes =  ['ru_user2017'];

       //          $local_file = 'files/' . $fileNames[0];
       //          $server_file = $fileNames[0];

       //          // set up basic connection
       //          $conn_id = ftp_connect($connIPs[0]);

       //          // login with username and password
       //          $login_result = ftp_login($conn_id, $ftp_user_names[0], $ftp_user_passes[0]);

       //          // try to download $server_file and save to $local_file
       //          if (ftp_get($conn_id, $local_file, $server_file, FTP_BINARY)) {
       //              echo "Successfully written to $local_file\n";
       //          } else {
       //              echo "There was a problem\n";
       //          }

       //          // close the connection
       //          ftp_close($conn_id);


       //  // $path = Input::file('excel')->getRealPath();
       //  $results = Excel::load($local_file, function($reader){
       //                                          $reader->all();
       //                                          })->get();

       // unlink($local_file);
       // // dd(parse_url('http://segoma.com/v.php?type=view&id=N12SEP444'));
       //  $this->importToDatabase($results);

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
