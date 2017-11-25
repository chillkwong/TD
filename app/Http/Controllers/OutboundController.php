<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OutboundController extends Controller
{
    public function directTo($locale, $link){
    	
    	return header("Location: http://www.". $link, true, 301);
    }
}
