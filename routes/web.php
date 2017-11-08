<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/adm/{vue_capture?}', function () {
    return view('backend');
})->where('vue_capture', '[\/\w\.-]*');


//page

//diamond 
Route::get('/{locale}/gia-loose-diamonds/', 'DiamondController@bladeIndex');
Route::get('/{locale}/gia-loose-diamonds/{id}', 'DiamondController@bladeShow');

//engagementRing 
Route::get('/{locale}/engagement-rings/', 'EngagementRingController@bladeIndex');
Route::get('/{locale}/engagement-rings/{id}', 'EngagementRingController@bladeShow');

//weddingRingPair 
Route::get('/{locale}/wedding-rings/', 'WeddingRingPairController@bladeIndex');
Route::get('/{locale}/wedding-rings/{id}', 'WeddingRingPairController@bladeShow');

//CustomerJewellry 
Route::get('/{locale}/customer-jewellries/', 'InvPostController@bladeIndex');
Route::get('/{locale}/customer-jewellries/{id}', 'InvPostController@bladeShow');

//education 
Route::get('/{locale}/education-diamond-grading/', 'EducationController@bladeIndex');
Route::get('/{locale}/education-diamond-grading/{id}', 'EducationController@bladeShow');

Route::get('/{locale}/buying-procedure', 'BuyingProcedureController@bladeIndex');


Route::get('/{locale}/{vue_capture?}', function ($locale) {
	App::setLocale($locale);
    return view('welcome1');
})->where('vue_capture', '[\/\w\.-]*');


// Route::get('test', 'TestController@test');

Route::get('/{vue_capture?}', function () {
	App::setLocale('hk');
    return view('welcome1');
})->where('vue_capture', '[\/\w\.-]*');






// Route::get('/{vue_capture?}', function () {
//     return view('adm');
// })->where('vue_capture', '[\/\w\.-]*');
