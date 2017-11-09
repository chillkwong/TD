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

//CustomerMoment
Route::get('/{locale}/customer-moments/', 'CustomerMomentController@bladeIndex');

//education 
Route::get('/{locale}/education-diamond-grading/', 'EducationController@bladeIndex');

//4cs
Route::get('/{locale}/education-diamond-grading/gia-report', 'EducationController@giaReport');
Route::get('/{locale}/education-diamond-grading/gia-report/4cs', 'EducationController@fourCs');
Route::get('/{locale}/education-diamond-grading/gia-report/4cs/carat', 'EducationController@diamondCarat');
Route::get('/{locale}/education-diamond-grading/gia-report/4cs/color', 'EducationController@diamondColor');
Route::get('/{locale}/education-diamond-grading/gia-report/4cs/cut', 'EducationController@diamondCut');
Route::get('/{locale}/education-diamond-grading/gia-report/4cs/clarity', 'EducationController@diamondClarity');

//cert
Route::get('/{locale}/education-diamond-grading/grading-certficate', 'EducationController@diamondCertificate');
Route::get('/{locale}/education-diamond-grading/gia-report', 'EducationController@giaReport');

Route::get('/{locale}/education-diamond-grading/shape', 'EducationController@diamondShape');


//about-us
Route::get('/{locale}/buying-procedure', 'AboutUsController@aboutUs');
Route::get('/{locale}/buying-procedure', 'AboutUsController@buyingProcedure');


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
