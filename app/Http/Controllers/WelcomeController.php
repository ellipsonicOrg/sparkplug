<?php namespace App\Http\Controllers;

class WelcomeController extends Controller {

    /**
     * Create a new controller instance.
     *
     */
	public function __construct()
	{
		$this->middleware('guest');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{

		return view('frontend.welcome');

	}

	// Abstract method to redirect after login
	// The logic for where to go after login is
	// implemented at RedirectIfAuthenticated Class
	// handle method
	public function home() {}

}
