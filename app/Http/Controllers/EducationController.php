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

    public function giaReport($locale)
    {
      App()->setLocale($locale);


      return view('education.giaReport', compact(''));
 
    }

    public function fourCs($locale)
    {
      App()->setLocale($locale);


      return view('education.4cs', compact(''));
 
    }

    public function diamondCarat($locale)
    {
      App()->setLocale($locale);


      return view('education.diamondCarat', compact(''));
 
    }

    public function diamondColor($locale)
    {
      App()->setLocale($locale);


      return view('education.diamondColor', compact(''));
 
    }
    public function diamondCut($locale)
    {
      App()->setLocale($locale);


      return view('education.diamondCut', compact(''));
 
    }
    public function diamondClarity($locale)
    {
      App()->setLocale($locale);


      return view('education.diamondClarity', compact(''));
 
    }



    public function diamondCertificate($locale)
    {
      App()->setLocale($locale);


      return view('education.diamondCertificate', compact(''));
 
    }

    public function diamondShape($locale)
    {
      App()->setLocale($locale);


      return view('education.diamondShape', compact(''));
 
    }



}
