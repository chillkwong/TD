<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CustomerMoment;

class CustomerMomentController extends Controller
{
    public function bladeIndex($locale)
    {
      App()->setLocale($locale);


      return view('customerMoment.index', compact(''));
 
    }

    public function index()
    {
        $customers = CustomerMoment::orderBy('created_at', 'desc')
                ->with(['images'])
                ->paginate(request()->per_page);

        return response()
            ->json([
                'customers' => $customers
                ]);
    }

    public function engagementTips($locale){

        App()->setLocale($locale);

      return view('customerMoment.engagementTips', compact(''));
        
    }
}
