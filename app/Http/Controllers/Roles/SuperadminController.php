<?php

namespace App\Http\Controllers\Roles;

use Gate;
use App\User;
use App\Role;
use App\Permission;
use App\RoleUser;
use App\Http\Controllers\Controller;

class SuperadminController extends Controller {

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
        $data['page_header'] 		= "Activity";
        $data['page_description'] 	= "Graphs, charts and logs of your organization";
		return view('backend.superadmin.pages.dashboard',$data);
	}

}
