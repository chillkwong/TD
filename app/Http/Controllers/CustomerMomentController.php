<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CustomerMoment;

class CustomerMomentController extends Controller
{
    public function bladeIndex($locale)
    {
      App()->setLocale($locale);


      return view('CustomerMoment.index', compact(''));
 
    }
}
