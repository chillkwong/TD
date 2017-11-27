<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;

class PageController extends Controller
{
    public function show($id)
    {
    	$page  = Page::with('')->findOrFail($id);

    	return response()
    		->json([
    			'page' =>$page,
    			]);
    }

    public function hca($locale){
    	App()->setLocale($locale);
	    return view('page.HCA');
    }

    public function characteristics($locale){
        App()->setLocale($locale);
        return view('page.characteristics');
    }

    public function hkLabs($locale){
        App()->setLocale($locale);
        return view('page.hkLabs');
    }

}
