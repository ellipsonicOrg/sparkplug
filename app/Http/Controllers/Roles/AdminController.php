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
		//Anything you need
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		// Extend it the way you need here...
        $data['page_header'] = "Activity";
        $data['page_description'] = "Graphs, charts and logs of your organization";
		return view('backend.admin.pages.dashboard',$data);
	}

}
