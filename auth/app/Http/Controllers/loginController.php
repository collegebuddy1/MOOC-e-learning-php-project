<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;
use Cartalyst\Sentinel\Checkpoints\ThrottlingException;
use Cartalyst\Sentinel\Checkpoints\NotActivatedException;

class loginController extends Controller
{
    
	public function login()
	{
		return view('authentication.login');
	}

	public function postlogin(Request $request)
	{
		try {
			
			if (Sentinel::authenticate($request->all())) {
				if (Sentinel::getUser()->roles()->first()->slug=='admin')
			return redirect('/adminhome');
		elseif (Sentinel::getUser()->roles()->first()->slug=='formateur') 
			return redirect('/formateurhome');
		elseif (Sentinel::getUser()->roles()->first()->slug=='etudiant') 
			return redirect('/etudianthome');



		} 
		else {
			return redirect()->back()->with(['error'=>' wrong Information.']);
		}
		
		} 
		catch (ThrottlingException $e) {
			$delay=$e->getDelay();
			return redirect()->back()->with(['error'=>" You are banned for $delay seconds"]);
		}
		catch (NotActivatedException $e) {
		
			return redirect()->back()->with(['error'=>" Your account is not activated yet!!"]);
		}

		


		
		
		
		/*dd($request->all());*/


		/*$user = Sentinel::findById(1);
		Sentinel::login($user);*/

	}

	public function logout()
	{
		Sentinel::logout();
		return redirect('/login');
	}


}
