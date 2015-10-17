<?php

namespace App\Http\Controllers\Roles;

use Gate;
use App\Http\Controllers\Controller;

class AdminController extends Controller {

    /**
     * Create a new controller instance.
     *
     */
	public function __construct()
	{
		if(Gate::denies('access_admin_panel')) {

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

		return view('backend.admin.pages.dashboard',$data);
	}

}
