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
    			'model' =>WeddingRing::SearchPaginateAndOrder()
    			]);
    }
}
