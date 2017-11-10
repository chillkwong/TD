<?php

namespace App\Http\Controllers;

use File;
use Illuminate\Http\Request;
use App\Support\EngagementRingFilter;
use App\EngagementRing;

class EngagementRingController extends Controller
{


    public function bladeIndex($locale)
    {
      App()->setLocale($locale);


      return view('engagementRing.index', compact(''));
 
    }


    public function bladeShow($locale, $id)
    {
      App()->setLocale($locale);

      return view('engagementRing.show', compact(''));
 
    }

	public function index()
    {
    	return response()
    		->json([
    			'model' =>EngagementRing::SearchPaginateAndOrder()
    			]);
    }

    public function create()
    {
    	return response()
    		->json([
    			'form' =>EngagementRing::form(),
    			'option' =>EngagementRing::orderBy('id', 'desc')->first(['id'])
    		]);	
    }

    public function store(Request $request)
    {
    	$this->validate($request, [
    		'stock'  => 'required',
            'name' => 'required',
            'description' => 'required',
            'unit_price' => 'required | numeric |min:0',
    		]);
    	

        $engagementRing = EngagementRing::create($request->all());

        $cover ='';
         if ($request->hasFile('cover')) {
            $cover = $this->getFileName($request->cover);
            $request->cover->move(base_path('public/images'), $cover);
        }

        $image1 = '';
        if ($request->hasFile('image1')) {
            $image1 = $this->getFileName($request->image1);
            $request->image1->move(base_path('public/images'), $image1);
        }

        
        $engagementRing->cover = $cover;
        $engagementRing->image1 = $image1;

        $engagementRing->save();
        

    	return response()
    		->json([
    			'saved' => true
    			]);
    }

      protected function getFileName($file)
    {
            return str_random(). '.' .$file->extension();
    }

    public function show($id)
    {
    	$engagementRing = EngagementRing::findOrFail($id);
        $posts = EngagementRing::findOrFail($id)->invoices()->with('invPosts')->get();

        $invPosts = [];

        // dd($posts[0]->invPosts[0]);
        
        if ($posts[0]->has('invPosts')) {
            foreach ($posts as $p ) {
                $invPosts['invPosts'][] = $p->invPosts[0];
            }
            // return $posts[0]->only('invPosts');
        }

    	return response()
    		->json([
    			'model' => $engagementRing,
                'posts' => $invPosts,
    			]);
    }

    public function edit($id)
    {
    	$engagementRing = EngagementRing::findOrFail($id);

    	return response()
    		->json([
    			'form' =>$engagementRing,
    			'option' => []
    			]);
    }

    public function update(Request $request, $id)
    {
    	    	$this->validate($request, [
    		'stock'  => 'required',
            'name' => 'required',
            'description' => 'required',
            'unit_price' => 'required | numeric |min:0',
    		]);
    	$engagementRing = EngagementRing::findOrFail($id);

        // dd($request->all());
        $cover ='';
         if ($request->hasFile('cover')) {
            $cover = $this->getFileName($request->cover);
            $request->cover->move(base_path('public/images'), $cover);
            File::delete(base_path('public/images/'. $engagementRing->cover));
            $engagementRing->cover = $cover;
        }
        

        $image1= '';
        if ($request->hasFile('image1')) {
            $image1 = $this->getFileName($request->image1);
            $request->image1->move(base_path('public/images'), $image1);
            File::delete(base_path('public/images/'. $engagementRing->image1));
            $engagementRing->image1 = $image1;
        }
        
        
    	$engagementRing->update($request->except(['cover','image1']));

    	return response()
    		->json([
    			'saved' => true
    			]);
    }

    public function destroy($id)
    {
    	$engagementRing = EngagementRing::findOrFail($id);

        File::delete(base_path('public/images/'. $engagementRing->cover));
        File::delete(base_path('public/images/'. $engagementRing->image1));
        
    	$engagementRing->delete();

    	return response()
    		->json([
    			'deleted' => true
    			]);
    }
}
