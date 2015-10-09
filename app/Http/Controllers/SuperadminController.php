<?php namespace App\Http\Controllers;

use Gate;

class SuperadminController extends Controller {

    /**
     * Create a new controller instance.
     *
     */
	public function __construct()
	{
		if(Gate::denies('access_superadmin_panel')) {
            abort('403','Not authorized');
		}
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
        return view('superadmin');
	}

}
