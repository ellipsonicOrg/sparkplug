<?php namespace App\Http\Controllers;

use Gate;
use App\User;
use App\Role;
use App\Permission;
use App\RoleUser;


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
		$data['page_header'] 		= "Ecosystem";
		$data['page_description'] 	= "Users, Roles, Permissions and Module management";
		$data['total_users'] 		= User::count();
		$data['total_roles'] 		= Role::count();
		$data['total_permissions'] 	= Permission::count();
		$data['total_mappings']		= RoleUser::count();
		return view('backend.superadmin.pages.ecosystem',$data);
	}

}
