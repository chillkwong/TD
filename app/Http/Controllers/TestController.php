<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class TestController extends Controller
{
    public function test(){
    	return response()->download(base_path('public/front_end/contact/Winnie_Kwong.vcf'));
    }
}
