<?php

namespace App\Http\Middleware;

use Gate;
use Closure;
use Illuminate\Contracts\Auth\Guard;
use App\HasRoles;


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

            if($this->auth->user()->roles->contains('name', 'superadmin')) {

                return redirect('superadmin/home');

            } else if($this->auth->user()->roles[0]['name']) {

                return redirect($this->auth->user()->roles[0]['name'].'/home');

            } else {

                abort('401','User is unauthorized');

            }

        }

        return $next($request);
    }

}
