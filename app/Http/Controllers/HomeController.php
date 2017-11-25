<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index () {
		// App()->setLocale($locale);
	    return view('home.index');
	}
	public function indexLang ($locale) {
		App()->setLocale($locale);
	    return view('home.index');
	}
}
