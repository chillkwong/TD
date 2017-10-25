<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\WeddingRingPair;
use App\WeddingRing;

class WeddingRingPairController extends Controller
{
    public function index()
    {
    	return response()
    		->json([
                'model' =>WeddingRingPair::orderBy('created_at','desc')->with(['weddingRings'=>function($query){

                            $query
                                ->orderBy(request()->column, request()->direction)
                                ->whereIn('customized', explode(',',request()->customized))
                                ->whereIn('sideStone', explode(',',request()->sideStone))
                                ->whereIn('gender', explode(',',request()->gender))
                                ->whereIn('style', explode(',', request()->style))
                                ->whereIn('metal', explode(',', request()->metal))
                                ;}

                        ])
                ->has('weddingRings', '>=', 1)
                ->paginate(request()->per_page)
                ]);
    }
}
