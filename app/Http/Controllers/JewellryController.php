<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
    			'form' =>InvDiamond::form(),
    			'option' =>[]
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
