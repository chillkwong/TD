<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Invoice;
// use App\Item;
use App\InvDiamond;
use App\Jewellry;
use App\Customer;
use App\InvPost;

class InvoiceController extends Controller
{
    protected $company = [ 'info'=> [
                            'name' => 'Ting Diamond Limited',
                            'address' => 'Room 03, 3F, Koon Fook Centre, 9 knutsford Terrace, Tsim Sha Tsui, 
                                            Hong Kong',
                            'contact' => '852 54844533',
                            'website' => 'www.tingdiamond.com'
                                ]
                        ];

    public function index()
    {
                
    	return response()
    		->json([
    			'model' => Invoice::with('customer', 'invPosts')->filterPaginateOrder(),
    			]);
    }

    public function create()
    {
    	return response()
    		->json([
    			'form' =>Invoice::form(),
    			'option' => [
    				'customers' => Customer::orderBy('name')->select('id','phone as text')->get(),
                    'jewellries' => Jewellry::select('id','name as text','description','unit_price')->get()
    			]
    			]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
                'customer_id' => 'required | exists:customers,id',
                'title' => 'required',
                'date' => 'required | date_format:Y-m-d',
                'due_date' => 'required | date_format:Y-m-d',
                'discount' => 'required | numeric | min:0',
                'deposit' => 'required | numeric | min:0',
                'total' => 'required | numeric | min:0',
            ]);

        $data = $request->except('diamonds','jewellries');
        $data['sub_total'];
        $diamonds = [ ];
        $jewellries = [];
        
        foreach ($request->inv_diamonds as $diamond) {
            $diamonds[] = new InvDiamond($diamond);
        }

        $data['total'] = $data['sub_total'] - $data['discount'];
        $data['balance'] = $data['total'] - $data['deposit'];
        $invoice = Invoice::create($data);
        $invoice->invDiamonds()
        		->saveMany($diamonds);

        foreach ($request->jewellries as $jewellry) {
            $jewellries[] = $jewellry['id'];
        }

        $invoice->jewellries()->sync($jewellries);
        return response()
        		->json([
        			'saved' =>true
        			]);
    }

    public function show($id)
    {
    	$invoice  = Invoice::with('customer', 'invDiamonds', 'jewellries')->findOrFail($id);

    	return response()
    		->json([
    			'model' =>$invoice,
                'company' => $this->company
    			]);
    }

    public function edit($id)
    {
    	$invoice  = Invoice::with(['invDiamonds',
                'jewellries'=>function($query){
                   $query->get(['id']);
                   }
                ])->findOrFail($id);

    	return response()
    		->json([
    			'form' => $invoice,
    			'option' => [
                    'customers' => Customer::orderBy('name')->select('id','name as text')->get(),
                     'jewellries' => Jewellry::select('id','name as text','description','unit_price')->get()
                                         ],

    			]);
    }

    public function update(Request $request, $id)
    {
    	$this->validate($request,[
                'customer_id' => 'required |exists:customers,id',
                'title' => 'required',
                'balance' => 'required | integer',
                'count' => 'required | boolean',
                'date' => 'required | date_format:Y-m-d',
                'due_date' => 'required | date_format:Y-m-d',
                'discount' => 'required | numeric | min:0',
            ]);

    	$invoice = Invoice::findOrFail($id);

        $data = $request->except('inv_diamonds','jewellries');
        // $data['sub_total'] = 0;
        $diamonds = [ ];
        $diamondIds = [ ];

        foreach ($request->inv_diamonds as $diamond) {
            // $data['sub_total'] += $item['unit_price'] * $item['qty']; 
            if (isset($diamond['id'])) {

            	InvDiamond::whereId($diamond['id'])
            		->whereInvoiceId($invoice->id)
            		->update($diamond);

                        $diamondIds[] = $diamond['id'];
            }else{
            	$diamonds[ ] = new InvDiamond($diamond);
            }
        }

        // $data['total'] = $data['sub_total'] - $data['discount'];

        $invoice ->update($data);

        if (count($diamondIds)) {
        	InvDiamond::whereInvoiceId($invoice->id)
        		->whereNotIn('id', $diamondIds)
        		->delete();
        }

        if (count($diamonds)) {
            $invoice->invDiamonds()
                            ->saveMany($diamonds);
        }

        foreach ($request->jewellries as $jewellry) {
            $jewellries[] = $jewellry['id'];
        }

        $invoice->jewellries()->sync($jewellries);

        return response()
        		->json([
        			'saved' =>true
        			]);
    }

    public function destroy($id)
    {
    	$invoice = Invoice::findOrFail($id);
    	InvDiamond::whereInvoiceId($invoice->id)
    		->delete();
        $invoice->jewellries()->detach();
    	$invoice->delete();

    	return response()
    		->json([
    			'deleted' => true
    			]);
    }
}