<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\WeddingRingPair;
use App\WeddingRing;

class WeddingRingPairController extends Controller
{

    public function bladeIndex($locale)
    {
      App()->setLocale($locale);


      return view('weddingRing.index', compact(''));
 
    }


    public function bladeShow($locale, $id)
    {
      App()->setLocale($locale);

      return view('weddingRing.show', compact(''));
 
    }

    public function index()
    {
    	return response()
    		->json([
                'model' =>WeddingRingPair::orderBy('created_at','desc')->has('weddingRings')->with(['weddingRings'=>function($query){

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

    public function show($id)
    {
        $weddingRingPairs = WeddingRingPair::with('weddingRings')->findOrFail($id);

        $invPosts = [];

        if (count($weddingRingPairs->weddingRings)>0) {
            
            $post1 = WeddingRing::findOrFail($weddingRingPairs->weddingRings[0]->id)->invoices()->with('invPosts')->get();

            if ($post1[0]->has('invPosts')) {
                foreach ($post1 as $p ) {
                    $invPosts['invPosts'][] = $p->invPosts[0];
                }
            }
            

        }
 

        if (count($weddingRingPairs->weddingRings)>1) {
            
            $post2 = WeddingRing::findOrFail($weddingRingPairs->weddingRings[1]->id)->invoices()->with('invPosts')->get();

            if ($post2[0]->has('invPosts')) {
                foreach ($post2 as $p ) {
                    $invPosts['invPosts'][] = $p->invPosts[0];
                }
            }
            
        }
        
        
        return response()
            ->json([
                'model' => $weddingRingPairs,
                'posts' => $invPosts,
            ]);
    }
}
