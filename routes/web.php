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

Route::get('/en/{vue_capture?}', function () {
	App::setLocale('en');
    return view('welcome1');
})->where('vue_capture', '[\/\w\.-]*');

Route::get('/hk/{vue_capture?}', function () {
	App::setLocale('hk');
    return view('welcome1');
})->where('vue_capture', '[\/\w\.-]*');

Route::get('/cn/{vue_capture?}', function () {
	App::setLocale('cn');
    return view('welcome1');
})->where('vue_capture', '[\/\w\.-]*');


Route::get('/{vue_capture?}', function () {
	App::setLocale('hk');
    return view('welcome1');
})->where('vue_capture', '[\/\w\.-]*');



// Route::get('/{vue_capture?}', function () {
//     return view('adm');
// })->where('vue_capture', '[\/\w\.-]*');
