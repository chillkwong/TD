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
    			'form' =>Customer::form(),
    			'option' =>[]
    		]);	
    }

    public function store(Request $request)
    {
    	$this->validate($request, [
    		'name'  => 'required',
    		'email' => 'required | email',
    		'phone' =>'required',
    		]);
    	$customer = Customer::create($request->all());

    	return response()
    		->json([
    			'saved' => true
    			]);
    }

    public function show($id)
    {
    	$customer = Customer::findOrFail($id);

    	return response()
    		->json([
    			'model' => $customer
    			]);
    }

    public function edit($id)
    {
    	$customer = Customer::findOrFail($id);

    	return response()
    		->json([
    			'form' =>$customer,
    			'option' => []
    			]);
    }

    public function update(Request $request, $id)
    {
    	    	$this->validate($request, [
    		'name'  => 'required',
    		'email' => 'required | email',
    		'phone' =>'required',
    		]);
    	$customer = Customer::findOrFail($id);
    	$customer->update($request->all());

    	return response()
    		->json([
    			'saved' => true
    			]);
    }

    public function destroy($id)
    {
    	$customer = Customer::findOrFail($id);
    	$customer->delete();

    	return response()
    		->json([
    			'deleted' => true
    			]);
    }
}
