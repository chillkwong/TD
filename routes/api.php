<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/home', 'HomeController@index');

Route::post('/register', 'AuthController@register');
Route::post('/login', 'AuthController@login');
Route::post('/logout', 'AuthController@logout');

Route::Post('td-login', 'AdminController@login');

//backend
Route::resource('customers', 'CustomerController');
Route::resource('invoices', 'InvoiceController');

//Front
Route::resource('invDiamonds', 'InvDiamondController');
Route::resource('engagementRings', 'EngagementRingController');
Route::resource('weddingRings', 'WeddingRingPairController');

//page
Route::get('buyingProcedure', 'BuyingProcedure@appointment');

// Route::resource('weddingRings', 'WeddingRingController');

Route::resource('posts', 'PostController');
Route::resource('invPosts', 'InvPostController');
Route::resource('jewellries', 'JewellryController');

Route::resource('diamonds', 'DiamondController');
Route::post('appointment', 'AppointmentController@appointment');


Route::resource('items', 'ItemController');

//front
Route::resource('posts', 'PostController');



