<?php

namespace App\Http\Middleware;

use Gate;
use Closure;
use Illuminate\Contracts\Auth\Guard;
use App\RoleUser;


class RedirectIfAuthenticated
{
    /**
     * The Guard implementation.
     *
     * @var Guard
     */
    protected $auth;

    /**
     * Create a new filter instance.
     *
     * @param  Guard $auth
     */
    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($this->auth->check()) {

            $role_user = new RoleUser();

            if($role_user::getPrimaryRole($this->auth)) {

                return redirect($role_user::getPrimaryRole($this->auth));

            } else {

                abort('401','User is unauthorized');

            }

        }

        return $next($request);
    }

}
