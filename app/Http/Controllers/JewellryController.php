<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\InvDiamond;
use App\Jewellry;

class JewellryController extends Controller
{
     public function index()
    {
    	return response()
    		->json([
    			'model' =>Jewellry::filterPaginateOrder()
    			]);
    }

    public function create()
    {
    	return response()
    		->json([
    			'form' =>Jewellry::form(),
    			'option' =>Jewellry::orderBy('id', 'desc')->first(['id'])
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
    	

        $jewellry = Jewellry::create($request->all());

        $cover ='';
         if ($request->hasFile('cover')) {
        $cover = $this->getFileName($request->cover);
        $request->cover->move(base_path('public/images'), $cover);
        }

        $image1 = '';
        if ($request->hasFile('image1')) {
            $image1 = $request->image1->getClientOriginalName();
            $request->image1->move(base_path('public/images'), $image1);
        }

        
        $jewellry->cover = $cover;
        $jewellry->image1 = $image1;

        $jewellry->save();
        

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
    	$jewellry = Jewellry::findOrFail($id);

    	return response()
    		->json([
    			'model' => $jewellry
    			]);
    }

    public function edit($id)
    {
    	$jewellry = Jewellry::findOrFail($id);

    	return response()
    		->json([
    			'form' =>$jewellry,
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
    	$jewellry = Jewellry::findOrFail($id);

        dd($request->all());
        
        $cover ='';
         if ($request->hasFile('cover')) {
            $cover = $this->getFileName($request->cover);
            $request->cover->move(base_path('public/images'), $cover);
            File::delete(base_path('public/images'. $recipe->cover));
            $request->cover = $cover;
        }

        $image1 = '';
        if ($request->hasFile('image1')) {
            $image1 = $this->getFileName($request->image1);
            $request->image1->move(base_path('public/images'), $image1);
            File::delete(base_path('public/images'. $recipe->image1));
            $request->image1 = $image1;
        }

        
        
        

    	$jewellry->update($request->all());

    	return response()
    		->json([
    			'saved' => true
    			]);
    }

    public function destroy($id)
    {
    	$jewellry = Jewellry::findOrFail($id);
    	$jewellry->delete();

    	return response()
    		->json([
    			'deleted' => true
    			]);
    }
}
