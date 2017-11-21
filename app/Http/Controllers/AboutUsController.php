<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function aboutUs ($locale) {
		App()->setLocale($locale);
	    return view('aboutUs.index');
	}

	public function buyingProcedure ($locale) {
		App()->setLocale($locale);
	    return view('aboutUs.buyingProcedure');
	}

	public function customEngagementRing ($locale) {
		App()->setLocale($locale);
	    return view('aboutUs.customEngagementRing');
	}

	public function diamondInlayEngrave ($locale) {
		App()->setLocale($locale);
	    return view('aboutUs.diamondInlayEngrave');
	}
	
}
