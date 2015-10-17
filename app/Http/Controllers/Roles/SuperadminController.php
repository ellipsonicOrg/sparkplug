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
		if(Gate::denies('access_sparkplug_backend'))
        {

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
        $data['page_header'] 		= "Activity";
        $data['page_description'] 	= "Graphs, charts and logs of your organization";
		return view('backend.superadmin.pages.dashboard',$data);
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function ecosystem()
    {
        $data['page_header']        = "Sparkplug core";
        $data['page_description']   = "Core backend";
        return view('backend.superadmin.pages.ecosystem', $data);
    }

}
