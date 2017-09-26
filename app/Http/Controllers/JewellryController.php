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

        $cover = $request->cover->getClientOriginalName();
        $request->cover->move(base_path('public/images/jewellry/').$jewellry->id, $cover);


        $image1 = '';
        if ($request->hasFile('image1')) {
            $image1 = $request->image1->getClientOriginalName();
            $request->image1->move(base_path('public/images/jewellry/').$jewellry->id, $image1);
        }

        
        $jewellry->cover = $cover;
        $jewellry->image1 = $image1;

        $jewellry->save();
        

    	return response()
    		->json([
    			'saved' => true
    			]);
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
