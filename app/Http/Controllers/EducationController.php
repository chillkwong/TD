<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EducationController extends Controller
{
    
  public function bladeIndex($locale)
    {
      App()->setLocale($locale);


      return view('education.4cs', compact(''));
 
    }

}
