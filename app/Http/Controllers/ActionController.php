<?php namespace App\Http\Controllers;

use Gate;

class ActionController extends Controller {

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{

		if(Gate::allows('access_superadmin_panel')) {

			return redirect('/superadmin');

		} else {

			return redirect('/');

		}

	}

}
