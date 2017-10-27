<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\InvDiamond;


class InvDiamondController extends Controller
{
     public function index()
    {
    	return response()
    		->json([
    			'model' =>InvDiamond::filterPaginateOrder()
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
    		'price'  => 'required',
            'clarity' => 'required',
            'weight' => 'required',
            'color' => 'required',
            'cut' => 'required',
            'polish' => 'required',
            'symmetry' => 'required',
            'fluorescence' => 'required',
            'lab' => 'required',
            'certificate' => 'required',
            'shape' =>'required',
    		]);
    	$invDiamond = InvDiamond::create($request->all());

    	return response()
    		->json([
    			'saved' => true
    			]);
    }

    public function show($id)
    {
    	$invDiamond = InvDiamond::findOrFail($id);

    	return response()
    		->json([
    			'model' => $invDiamond
    			]);
    }

    public function edit($id)
    {
    	$invDiamond = InvDiamond::findOrFail($id);

    	return response()
    		->json([
    			'form' =>$invDiamond,
    			'option' => []
    			]);
    }

    public function update(Request $request, $id)
    {
    	    	$this->validate($request, [
    		'price'  => 'required',
            'clarity' => 'required',
            'weight' => 'required',
            'color' => 'required',
            'cut' => 'required',
            'polish' => 'required',
            'symmetry' => 'required',
            'fluorescence' => 'required',
            'lab' => 'required',
    		'certificate' => 'required',
    		'shape' =>'required',
    		]);
    	$invDiamond = InvDiamond::findOrFail($id);
    	$invDiamond->update($request->all());

    	return response()
    		->json([
    			'saved' => true
    			]);
    }

    public function destroy($id)
    {
    	$invDiamond = InvDiamond::findOrFail($id);
    	$invDiamond->delete();

    	return response()
    		->json([
    			'deleted' => true
    			]);
    }
}
