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

            abort('403','User has no privilages to access dashboard');

		}
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
        $data['page_header'] = "Activity";
        $data['page_description'] = "Graphs, charts and logs of your organization";
		return view('backend.superadmin.pages.dashboard',$data);
	}

}
