<?php

namespace App\Providers;

use App\Module;
use App\Permission;
use Illuminate\Contracts\Auth\Access\Gate as GateContract;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any application authentication / authorization services.
     *
     * @param  \Illuminate\Contracts\Auth\Access\Gate  $gate
     * @return void
     */
    public function boot(GateContract $gate)
    {
        parent::registerPolicies($gate);

        // Dynamically register permissions with Laravel's Gate.
        $this->registerGatePermissions($gate);


    }

    /**
     * Fetch the collection of site permissions.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    protected function getPermissionWithRole()
    {
        return Permission::with('roles')->get();
    }

    /**
     * @param $module_id
     * @return mixed
     */
    protected function getModules($module_id)
    {
        return Module::find($module_id)->get();
    }

    /**
     * @param GateContract $gate
     */
    public function registerGatePermissions(GateContract $gate)
    {
        foreach ($this->getPermissionWithRole() as $permission) {

            $this->getPermittedModules($gate, $permission);

            $this->getAllowedPermissions($gate, $permission);
        }
    }

    /**
     * @param GateContract $gate
     * @param $permission
     */
    public function getPermittedModules(GateContract $gate, $permission)
    {
        foreach ($this->getModules($permission->module_id) as $module) {

            $gate->define($module->name, function ($user) use ($permission) {

                return $user->hasPermission($permission);

            });

        }
    }

    /**
     * @param GateContract $gate
     * @param $permission
     */
    public function getAllowedPermissions(GateContract $gate, $permission)
    {
        $gate->define($permission->name, function ($user) use ($permission) {

            return $user->hasPermission($permission);

        });
    }


}