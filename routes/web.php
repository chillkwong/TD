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
Route::get('/{locale}/buying-procedure', 'BuyingProcedure@index');


Route::get('/{locale}/{vue_capture?}', function ($locale) {
	App::setLocale($locale);
    return view('welcome1');
})->where('vue_capture', '[\/\w\.-]*');


// Route::get('test', 'TestController@test');

// Route::get('/{vue_capture?}', function () {
// 	App::setLocale('hk');
//     return view('welcome1');
// })->where('vue_capture', '[\/\w\.-]*');






// Route::get('/{vue_capture?}', function () {
//     return view('adm');
// })->where('vue_capture', '[\/\w\.-]*');
