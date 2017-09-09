<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;
use Hash;

class AdminController extends Controller
{
    	public function __construct()
	    {
	    	$this->middleware('auth:api')
	    		->only('logout');
	    }   


		  public function login(Request $request)
		  {
		  	$this->validate($request, [
	    		'email' => 'required | email',
	    		'password' => 'required | between:6,25'
	    		]);

	    	$user = User::where('email', $request->email)
	    		->first();
	    	$user->authorizeRoles(['admin']);

	    	if ($user && Hash::check($request->password, $user->password)) {
	    		$user->api_token = str_random(60);
	    		$user->save();

	    		return response()
	    			->json([
	    				'authenticated' => true,
	    				'api_token' => $user->api_token,
	    				'user_id' => $user->id
	    				]);
	    	}

	    	return response()
	    		->json([
	    			'email' => ['Provided email and password does not match!']
	    			], 422);
	    		


		  }
		  /*
		  public function someAdminStuff(Request $request)
		  {
		    $request->user()->authorizeRoles('manager');
		    return view(‘some.view’);
		  }
		  */
}
